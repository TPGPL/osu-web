// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

import CurrentUserJson from 'interfaces/current-user-json';
import { route } from 'laroute';
import { debounce } from 'lodash';
import OsuCore from 'osu-core';
import { onError } from 'utils/ajax';

type ContainerEvent = JQuery.TriggeredEvent<unknown, unknown, AccountHTMLElement, unknown>;

interface AccountHTMLElement extends HTMLElement {
  debouncedUpdate: ReturnType<typeof debounce>;
  savedTimeout?: number;
  updating: JQuery.jqXHR;
}

export default class AccountEdit {
  constructor(private readonly core: OsuCore) {
    $(document).on('input change', '.js-account-edit', this.handleInputChange);
  }

  private abortUpdate(form: AccountHTMLElement) {
    if (form.updating != null) {
      form.updating.abort();
    }

    this.clearState(form);
  }

  private clearState(el: AccountHTMLElement) {
    window.clearTimeout(el.savedTimeout);
    el.dataset.accountEditState = '';
  }

  private getFieldName(form: HTMLElement) {
    if (form.dataset.field != null) {
      return form.dataset.field;
    }

    const input = form.querySelector<HTMLInputElement>('.js-account-edit__input');
    if (input == null) {
      throw new Error('missing input name');
    }

    return input.name;
  }

  private getMultiValue(form: HTMLElement) {
    const data: Partial<Record<string, boolean>> = {};

    for (const checkbox of form.querySelectorAll<HTMLInputElement>('.js-account-edit__input')) {
      data[checkbox.name] = checkbox.checked;
    }

    return data;
  }

  private getValue(form: HTMLElement) {
    let value: string | string[] | undefined;
    let prevValue: string | undefined;

    if (form.dataset.accountEditType === 'array') {
      prevValue = undefined;
      value = [];

      for (const checkbox of form.querySelectorAll('input')) {
        if (checkbox.checked) {
          value.push(checkbox.value);
        }
      }
    } else if (form.dataset.accountEditType === 'radio') {
      prevValue = form.dataset.lastValue;

      // TODO: require name?
      for (const checkbox of form.querySelectorAll<HTMLInputElement>('input[type="radio"]')) {
        if (checkbox.checked) {
          value = checkbox.value;
          break;
        }
      }
    } else {
      prevValue = form.dataset.lastValue;

      const input = form.querySelector<HTMLInputElement>('.js-account-edit__input');
      if (input == null) {
        throw new Error('missing input');
      }

      value = input.type === 'checkbox' ? String(input.checked) : input.value;
    }

    return { prevValue, value };
  }

  private readonly handleInputChange = (e: ContainerEvent) => {
    const form = e.currentTarget;

    if (form.dataset.accountEditAutoSubmit !== '1') {
      return;
    }

    this.abortUpdate(form);
    this.saving(form);

    if (form.debouncedUpdate == null) {
      form.debouncedUpdate = debounce(this.update, 1000);
    }

    form.debouncedUpdate(form);
  };

  private saving(el: HTMLElement) {
    el.dataset.accountEditState = 'saving';
  }

  private readonly update = (form: AccountHTMLElement) => {
    let data: Partial<Record<string, boolean | string | string[]>>;

    if (form.dataset.accountEditType === 'multi') {
      data = this.getMultiValue(form);
    } else {
      const { prevValue, value } = this.getValue(form);

      if (value === prevValue) {
        return;
      }

      const field = this.getFieldName(form);

      // dataset autoconverts to string but the typing doesn't accept array.
      form.dataset.lastValue = Array.isArray(value) ? value.join(',') : value;
      data = { [field]: value };
    }

    const url = form.dataset.url ?? route('account.update');

    form.updating = $.ajax(url, {
      data,
      method: 'PUT',
    }).done((response: CurrentUserJson | null) => {
      if (form.dataset.userPreferencesUpdate === '1' && response != null) {
        this.core.setCurrentUser(response);
      }

      window.clearTimeout(form.savedTimeout);
      form.dataset.accountEditState = 'saved';
      form.savedTimeout = window.setTimeout(() => this.clearState(form), 3000);
    }).fail((xhr) => {
      this.clearState(form);
      onError(xhr);
    });
  };
}
