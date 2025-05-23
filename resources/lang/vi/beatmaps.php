<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'invalid_ruleset' => '',

    'change_owner' => [
        'too_many' => 'Quá nhiều mapper khách.',
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Cập nhật phiếu thất bại',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'cho phép kudosu',
        'beatmap_information' => 'Trang Beatmap',
        'delete' => 'xóa',
        'deleted' => 'Đã xóa bởi :editor :delete_time.',
        'deny_kudosu' => 'từ chối kudosu',
        'edit' => 'chỉnh sửa',
        'edited' => 'Sửa đổi lần cuối bởi :editor :update_time.',
        'guest' => 'Chế độ khách bởi :user',
        'kudosu_denied' => 'Đã từ chối nhận kudosu.',
        'message_placeholder_deleted_beatmap' => 'Độ khó này đã bị xóa nên nó có thể sẽ không còn được thảo luận nữa.',
        'message_placeholder_locked' => 'Chức năng thảo luận của beatmap này đã bị vô hiệu hóa.',
        'message_placeholder_silenced' => "Không thể đăng thảo luận khi bị khoá mõm.",
        'message_type_select' => 'Chọn Kiểu Bình Luận',
        'reply_notice' => 'Nhấn enter để trả lời.',
        'reply_resolve_notice' => 'Ấn Enter để phản hồi. Ấn Ctrl+Enter để phản hồi và giải quyết.',
        'reply_placeholder' => 'Nhập câu trả lời của bạn tại đây',
        'require-login' => 'Hãy đăng nhập để đăng hoặc trả lời',
        'resolved' => 'Đã giải quyết',
        'restore' => 'khôi phục',
        'show_deleted' => 'Hiển thị bình luận đã xóa',
        'title' => 'Góc Thảo Luận',
        'unresolved_count' => ':count_delimited vấn đề chưa được giải quyết',

        'collapse' => [
            'all-collapse' => 'Thu gọn tất cả',
            'all-expand' => 'Mở rộng tất cả',
        ],

        'empty' => [
            'empty' => 'Chưa có cuộc thảo luận nào hết!',
            'hidden' => 'Không có cuộc thảo luận nào tương ứng với bộ lọc đã chọn.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Khóa thảo luận',
                'unlock' => 'Mở khóa thảo luận',
            ],

            'prompt' => [
                'lock' => 'Lí do khóa',
                'unlock' => 'Bạn có chắc chắn muốn mở khóa không?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Bài đăng này sẽ vào phần thảo luận chung của beatmap, dùng mốc thởi gian để bắt đầu bài đăng (ví dụ 00:12:345) để mod beatmap này.',
            'in_timeline' => 'Để mod nhiều mốc thời gian , hãy đăng nhiều lần (một bài đăng trên một mốc thời gian).',
        ],

        'message_placeholder' => [
            'general' => 'Nhập vào đây để đăng vào Chung (:version)',
            'generalAll' => 'Nhập vào đây để đăng vào Chung (Tất cả độ khó)',
            'review' => 'Gõ ở đây để đăng một bài đánh giá',
            'timeline' => 'Nhập vào đây để đăng vào dòng thời gian (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Hủy tư cách',
            'hype' => 'Hype!',
            'mapper_note' => 'Ghi Chú',
            'nomination_reset' => 'Thiết Lập Lại Đề Cử',
            'praise' => 'Khen ngợi',
            'problem' => 'Vấn đề',
            'problem_warning' => 'Báo cáo vấn đề',
            'review' => 'Đánh giá',
            'suggestion' => 'Gợi ý',
        ],

        'message_type_title' => [
            'disqualify' => 'Hủy xét duyệt tư cách',
            'hype' => 'Đăng Hype!',
            'mapper_note' => 'Đăng Ghi Chú',
            'nomination_reset' => 'Loại bỏ tất cả đề cử',
            'praise' => ' Đăng Khen ngợi',
            'problem' => 'Đăng Vấn đề',
            'problem_warning' => 'Đăng Vấn đề',
            'review' => 'Đăng nhận xét',
            'suggestion' => 'Đăng Đề xuất',
        ],

        'mode' => [
            'events' => 'Lịch sử',
            'general' => 'Chung :scope',
            'reviews' => 'Các đánh giá',
            'timeline' => 'Dòng thời gian',
            'scopes' => [
                'general' => 'Difficulty này',
                'generalAll' => 'Tất cả difficulties',
            ],
        ],

        'new' => [
            'pin' => 'Ghim',
            'timestamp' => 'Mốc thời gian',
            'timestamp_missing' => 'ctrl-c trong chế độ chỉnh sửa (edit mode) và dán trong bài đăng của bạn để thêm một mốc thời gian!',
            'title' => 'Cuộc Thảo Luận Mới',
            'unpin' => 'Bỏ ghim',
        ],

        'review' => [
            'new' => 'Nhận xét mới',
            'embed' => [
                'delete' => 'Xoá',
                'missing' => '[ĐÃ XOÁ THẢO LUẬN]',
                'unlink' => 'Gỡ liên kết',
                'unsaved' => 'Huỷ lưu',
                'timestamp' => [
                    'all-diff' => 'Các bài đăng trên "Mọi độ khó" không thể gắn mốc thời gian.',
                    'diff' => 'Nếu điều :type này bắt đầu với một dấu thời gian, nó sẽ được hiển thị trong Dòng thời gian.',
                ],
            ],
            'insert-block' => [
                'paragraph' => 'chèn đoạn văn',
                'praise' => 'chèn lời ca ngợi',
                'problem' => 'chèn vấn đề',
                'suggestion' => 'chèn gợi ý',
            ],
        ],

        'show' => [
            'title' => ':title được map bởi :mapper',
        ],

        'sort' => [
            'created_at' => 'Thời gian tạo',
            'timeline' => 'Timeline',
            'updated_at' => 'Cập nhật lần cuối',
        ],

        'stats' => [
            'deleted' => 'Đã xóa',
            'mapper_notes' => 'Ghi chú',
            'mine' => 'Của tôi',
            'pending' => 'Chưa giải quyết',
            'praises' => 'Khen ngợi',
            'resolved' => 'Đã giải quyết',
            'total' => 'Tất cả',
        ],

        'status-messages' => [
            'approved' => 'Beatmap này đã được chấp nhận (approved) vào :date!',
            'graveyard' => "Beatmap này chưa được cập nhật từ :date và có thể đã bị đắp mộ...",
            'loved' => 'Beatmap này đã được love vào :date!',
            'ranked' => 'Beatmap này đã được xếp hạng (ranked) vào :date!',
            'wip' => 'Ghi chú: Beatmap này được đánh dấu là đang thực hiện bởi mapper.',
        ],

        'votes' => [
            'none' => [
                'down' => 'Chưa có downvote',
                'up' => 'Chưa có upvote',
            ],
            'latest' => [
                'down' => 'Downvote mới nhất',
                'up' => 'Upvote mới nhất',
            ],
        ],
    ],

    'hype' => [
        'button' => 'Hype Beatmap!',
        'button_done' => 'Đã Được Hype!',
        'confirm' => "Bạn chắc không? Việc này sẽ dùng một trong :n hype còn lại của bạn và không thể hủy bỏ.",
        'explanation' => 'Hype beatmap này để làm nó có khả năng được đề cử (nominate) và xếp hạng (rank)!',
        'explanation_guest' => 'Đăng nhập và hype beatmap này để nó có khả năng được đề cử (nominate) và xếp hạng (rank)!',
        'new_time' => "Bạn sẽ nhận được đợt hype khác vào :new_time.",
        'remaining' => 'Bạn chỉ còn :remaining hype.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Hype Train',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Để lại Phản hồi',
    ],

    'nominations' => [
        'already_nominated' => 'Bạn đã đề cử beatmap này rồi.',
        'cannot_nominate' => 'Bạn không thể đề cử chế độ trò chơi của beatmap này.',
        'delete' => 'Xóa',
        'delete_own_confirm' => 'Bạn có chắc không? Beatmap sẽ bị xóa và bạn sẽ được chuyển hướng quay lại trang cá nhân của bạn.',
        'delete_other_confirm' => 'Bạn có chắc không? Beatmap sẽ bị xóa và bạn sẽ được chuyển hướng quay trở lại trang cá nhân của người dùng.',
        'disqualification_prompt' => 'Lý do để disqualify?',
        'disqualified_at' => 'Disqualified :time_ago (:reason).',
        'disqualified_no_reason' => 'không đưa ra lí do',
        'disqualify' => 'Disqualify',
        'incorrect_state' => 'Có lỗi khi thực hiện việc này, hãy thử tải lại trang.',
        'love' => 'Yêu thích',
        'love_choose' => 'Lựa chọn chế độ yêu thích',
        'love_confirm' => 'Yêu thích beatmap này?',
        'nominate' => 'Đề Cử',
        'nominate_confirm' => 'Đề cử (nominate) beatmap này?',
        'nominated_by' => 'Được :users đề cử',
        'not_enough_hype' => "Không đủ hype.",
        'remove_from_loved' => 'Gỡ khỏi Được Yêu mến',
        'remove_from_loved_prompt' => 'Lý do gỡ khỏi Được Yêu thích:',
        'required_text' => 'Trạng thái đề cử: :current/:required',
        'reset_message_deleted' => 'đã xóa',
        'title' => 'Trạng Thái Đề Cử',
        'unresolved_issues' => 'Vẫn còn một số vấn đề chưa giải quyết cần được xem lại trước.',

        'rank_estimate' => [
            '_' => 'Map này ước tính sẽ được Xếp Hạng :date nếu không tìm ra lỗi nào. Nó đang ở #:position trong :queue.',
            'unresolved_problems' => 'Map này bị chặn không cho phép ra khỏi phần Đủ tư cách cho đến khi :problems được giải quyết.',
            'problems' => 'những vấn đề này',
            'on' => 'vào ngày :date',
            'queue' => 'hàng chờ xếp hạng',
            'soon' => 'sớm',
        ],

        'reset_at' => [
            'nomination_reset' => 'Quá trình đề cử (nomination) thiết lập lại vào :time_ago bởi :user với vấn đề mới :discussion (:message).',
            'disqualify' => 'Disqualified :time_ago bởi :user với vấn đề mới :discussion (:message).',
        ],

        'reset_confirm' => [
            'disqualify' => 'Bạn chắc không? Việc này sẽ loại bỏ beatmap khỏi qualify và thiết lập lại quá trình đề cử.',
            'nomination_reset' => 'Bạn chắc không? Đăng một vấn đề mới sẽ thiết lập lại quá trình đề cử (nomination).',
            'problem_warning' => 'Bạn có chắc là muốn báo cáo vấn đề về beatmap này không? Việc này sẽ gửi cánh báo đến những người đề cử beatmap.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'nhập từ khóa...',
            'login_required' => 'Đăng nhập để tìm kiếm.',
            'options' => 'Tùy Chọn Tìm Kiếm Khác',
            'supporter_filter' => 'Lọc theo :filters cần một supporter tag đang hoạt động',
            'not-found' => 'không có kết quả',
            'not-found-quote' => '... không, chả có gì cả.',
            'filters' => [
                'extra' => 'thêm',
                'general' => 'Chung',
                'genre' => 'Thể Loại',
                'language' => 'Ngôn Ngữ',
                'mode' => 'Chế Độ',
                'nsfw' => 'Nội dung không lành mạnh',
                'played' => 'Đã chơi',
                'rank' => 'Thứ Hạng Đạt Được',
                'status' => 'Danh mục',
            ],
            'sorting' => [
                'title' => 'Tiêu đề',
                'artist' => 'Nghệ sĩ',
                'difficulty' => 'Độ khó',
                'favourites' => 'Số yêu thích',
                'updated' => 'Ngày cập nhật',
                'ranked' => 'Ngày xếp hạng',
                'rating' => 'Đánh giá',
                'plays' => 'Lượt chơi',
                'relevance' => 'Mức độ liên quan',
                'nominations' => 'Số đề cử',
            ],
            'supporter_filter_quote' => [
                '_' => 'Lọc theo :filters cần một :link đang hoạt động',
                'link_text' => 'osu!supporter tag',
            ],
        ],
    ],
    'general' => [
        'converts' => 'Bao gồm beatmap được chuyển đổi',
        'featured_artists' => 'Nghệ sĩ nổi bật',
        'follows' => 'Mapper đã đăng ký',
        'recommended' => 'Độ khó đề nghị',
        'spotlights' => 'Beatmap tiêu điểm',
    ],
    'mode' => [
        'all' => 'Tất cả',
        'any' => 'Bất Kì',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
        'undefined' => 'chưa đặt',
    ],
    'status' => [
        'any' => 'Bất Kì',
        'approved' => 'Được Chấp Nhận',
        'favourites' => 'Yêu thích',
        'graveyard' => 'Đắp mộ',
        'leaderboard' => 'Có danh sách xếp hạng',
        'loved' => 'Được yêu mến',
        'mine' => 'Map của tôi',
        'pending' => 'Đang chờ',
        'wip' => 'Chưa xong',
        'qualified' => 'Đủ tư cách',
        'ranked' => 'Đã được xếp hạng',
    ],
    'genre' => [
        'any' => 'Bất Kì',
        'unspecified' => 'Chưa Xác Định',
        'video-game' => 'Video Game',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Khác',
        'novelty' => 'Mới Lạ',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Điện Tử',
        'metal' => 'Metal',
        'classical' => 'Cổ điển',
        'folk' => 'Dân ca',
        'jazz' => 'Jazz',
    ],
    'language' => [
        'any' => 'Bất Kì',
        'english' => 'Tiếng Anh',
        'chinese' => 'Tiếng Trung',
        'french' => 'Tiếng Pháp',
        'german' => 'Tiếng Đức',
        'italian' => 'Tiếng Ý',
        'japanese' => 'Tiếng Nhật',
        'korean' => 'Tiếng Hàn',
        'spanish' => 'Tiếng Tây Ban Nha',
        'swedish' => 'Tiếng Thụy Điển',
        'russian' => 'Tiếng Nga',
        'polish' => 'Tiếng Ba Lan',
        'instrumental' => 'Nhạc Cụ',
        'other' => 'Khác',
        'unspecified' => 'Không xác định',
    ],

    'nsfw' => [
        'exclude' => 'Ẩn',
        'include' => 'Hiển thị',
    ],

    'played' => [
        'any' => 'Bất Kì',
        'played' => 'Đã Chơi',
        'unplayed' => 'Chưa Chơi',
    ],
    'extra' => [
        'video' => 'Có Video',
        'storyboard' => 'Có Storyboard',
    ],
    'rank' => [
        'any' => 'Bất Kì',
        'XH' => 'Silver SS',
        'X' => '',
        'SH' => 'Silver S',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Số lượt chơi: :count',
        'favourites' => 'Yêu thích: :count',
    ],
    'variant' => [
        'mania' => [
            '4k' => '4K',
            '7k' => '7K',
            'all' => 'Tất cả',
        ],
    ],
];
