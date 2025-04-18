<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'play_more' => 'ทำไมไม่ลองเล่น osu! ดูละ?',
    'require_login' => 'กรุณาเข้าสู่ระบบเพื่อดำเนินการต่อไป',
    'require_verification' => 'กรุณายืนยันเพื่อดำเนินการต่อไป',
    'restricted' => "ไม่สามารถทำสิ่งนั้นได้ในขณะที่ถูกจำกัด",
    'silenced' => "ไม่สามารถทำสิ่งนั้นได้ในขณะที่ถูกเงียบ",
    'unauthorized' => 'ปฏิเสธการเข้าใช้.',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'ไม่สามารถยกเลิกการ Hype',
            'has_reply' => 'ไม่สามารถลบการสนทนาที่มีข้อความตอบกลับ',
        ],
        'nominate' => [
            'exhausted' => 'คุณถึงขีดจำกัดของการเสนอชื่อแล้วสำหรับวันนี้ โปรดลองอีกครั้งในวันพรุ่งนี้',
            'incorrect_state' => 'เกิดข้อผิดพลาดในการดำเนินการ ลองรีเฟรชหน้านี้ดู',
            'owner' => "ไม่สามารถเสนอชื่อบีทแมพของตัวเองได้",
            'set_metadata' => 'คุณต้องตั้งค่าหมวดหมู่เพลงและภาษาก่อนเสนอชื่อบีทแมพ',
        ],
        'resolve' => [
            'not_owner' => 'เฉพาะผู้เริ่มกระทู้ และเจ้าของบีทแมพสามารถทำเครื่องหมายว่าการสนทนาถูกแก้ไขแล้ว',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'เจ้าของบีทแมพหรือ nominator/สมาชิกในกลุ่ม QAT เท่านั้นที่สามารถโพสบันทึกย่อของนักทำบีทแมพได้',
        ],

        'vote' => [
            'bot' => "ไม่สามารถโหวตบนการสนทนาที่สร้างขึ้นโดยบอต",
            'limit_exceeded' => 'กรุณารอสักครู่ก่อนโหวตเพิ่ม',
            'owner' => "ไม่สามารถโหวตการสนทนาของตัวเองได้",
            'wrong_beatmapset_state' => 'สามารถโหวตในการสนทนาของบีทแมพที่อยู่ในสถานะอยู่ระหว่างดำเนินการเท่านั้น',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'คุณลบได้แค่โพสต์ของตัวเองเท่านั้น',
            'resolved' => 'คุณไม่สามารถลบโพสต์ที่ถูกแก้ไขแล้วได้',
            'system_generated' => 'โพสต์ที่ระบบสร้างเองจะลบไม่ได้',
        ],

        'edit' => [
            'not_owner' => 'เฉพาะคนโพสต์เท่านั้นที่สามารถแก้ไขโพสต์ได้',
            'resolved' => 'คุณไม่สามารถแก้ไขโพสต์ที่ถูกแก้ไขแล้วได้',
            'system_generated' => 'โพสต์ที่ระบบสร้างเองจะไม่สามารถถูกแก้ไขได้',
        ],
    ],

    'beatmapset' => [
        'discussion_locked' => 'บีทแมพนี้ถูกล็อคไว้สำหรับการสนทนา',

        'metadata' => [
            'nominated' => 'คุณไม่สามารถเปลี่ยน metadata ของบีทแมพที่ทำการเสนอชื่อเป็นที่เรียบร้อยแล้ว ติดต่อ BN หรือ NAT หากคุณคิดว่ามีข้อผิดพลาดประการใด',
        ],
    ],

    'beatmap_tag' => [
        'store' => [
            'no_score' => '',
        ],
    ],

    'chat' => [
        'blocked' => 'ไม่สามารถส่งข้อความถึงผู้ใช้ที่บล็อกคุณหรือที่คุณบล็อกได้',
        'friends_only' => 'ผู้ใช้นี้บล็อกข้อความจากคนที่ไม่ใช่เพื่อนของเขา',
        'moderated' => 'แชแนลนี้อยู่ระหว่างการขัดกรอง',
        'no_access' => 'คุณไม่มีสิทธิ์เข้าถึงช่องนี้',
        'no_announce' => 'คุณไม่ได้รับอนุญาตที่จะโพสต์ประกาศ',
        'receive_friends_only' => 'ผู้ใช้นี้อาจไม่สามารถตอบกลับได้ เนื่องจากคุณกำลังยอมรับแค่ข้อความจากบุคคลที่อยู่บนรายชื่อเพื่อนของคุณ',
        'restricted' => 'คุณไม่สามารถส่งข้อความได้ในสถานะเงียบ ถูกจำกัดการใช้งานหรือถูกแบน',
        'silenced' => 'คุณไม่สามารถส่งข้อความได้ในสถานะเงียบ ถูกจำกัดการใช้งาน หรือถูกแบน',
    ],

    'comment' => [
        'store' => [
            'disabled' => 'การแสดงความคิดเห็นถูกปิดใช้งาน',
        ],
        'update' => [
            'deleted' => "ไม่สามารถแก้ไขโพสต์ที่ถูกลบได้",
        ],
    ],

    'contest' => [
        'judging_not_active' => 'การแข่งขันนี้ยังไม่ได้รับการตัดสิน',
        'voting_over' => 'คุณไม่สามารถเปลี่ยนการโหวตหลังจากระยะเวลาลงคะแนนเสียงสำหรับการประกวดนี้ได้สิ้นสุดลง',

        'entry' => [
            'limit_reached' => 'คุณถึงขีดจำกัดของปริมาณงานที่ส่งเข้าประกวดได้แล้ว',
            'over' => 'ขอบคุณที่เข้าร่วมการประกวดในครั้งนี้ เราได้ปิดรับผลงานสำหรับการประกวดครั้งนี้แล้วและการโหวตจะเริ่มขึ้นเร็วๆนี้',
        ],
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'ไม่มีสิทธิในการจัดการฟอรั่มนี้',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'สามารถลบได้แค่โพสต์ล่าสุดเท่านั้น',
                'locked' => 'ไม่สามารถลบโพสต์หัวเรื่องที่ถูกล็อกได้',
                'no_forum_access' => 'ต้องการการอนุญาติในการเข้าถึงฟอรั่มนี้',
                'not_owner' => 'เฉพาะคนโพสต์เท่านั้นที่สามารถลบโพสต์ได้',
            ],

            'edit' => [
                'deleted' => 'ไม่สามารถแก้ไขโพสต์ที่ถูกลบ',
                'locked' => 'โพสต์นี้ถูกล็อคจากการแก้ไข',
                'no_forum_access' => 'ต้องการการอนุญาติในการเข้าถึงฟอรั่มนี้',
                'not_owner' => 'เฉพาะคนโพสต์เท่านั้นที่สามารถแก้ไขโพสต์ได้',
                'topic_locked' => 'ไม่สามารถแก้ไขโพสต์ในกระทู้ที่ถูกล้อค',
            ],

            'store' => [
                'play_more' => 'โปรดลองเล่นเกมก่อนที่จะโพสต์ในฟอรั่ม หากคุณมีปัญหากับการเล่น กรุณาโพสต์ฟอรั่มความช่วยเหลือและสนับสนุน',
                'too_many_help_posts' => "คุณต้องเล่นเกมเพิ่มก่อนที่คุณสามารถจะโพสต์อีกในฟอรั่ม หากคุณมีปัญหาในการเล่นเกม อีเมล์ support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'กรุณาแก้ไขโพสต์ล่าสุดของคุณแทนที่จะโพสต์อีกที',
                'locked' => 'ไม่สามารถตอบกลับในกระทู้ที่ถูกล็อก',
                'no_forum_access' => 'ต้องการการอนุญาติในการเข้าถึงฟอรั่มนี้',
                'no_permission' => 'ไม่ได้รับอนุญาตให้ตอบกลับ',

                'user' => [
                    'require_login' => 'กรุณาเข้าสู่ระบบเพื่อตอบกลับ',
                    'restricted' => "ไม่สามารถตอบกลับได้ในขณะที่ถูกจำกัด",
                    'silenced' => "ไม่สามารถตอบกลับได้ในขณะที่ถูกเงียบ",
                ],
            ],

            'store' => [
                'no_forum_access' => 'ต้องการการอนุญาติในการเข้าถึงฟอรั่มนี้',
                'no_permission' => 'ไม่มีสิทธิ์ในการสร้างกระทู้ใหม่',
                'forum_closed' => 'ฟอรั่มถูกปิด และไม่สามารถโพสต์ในนี้ได้',
            ],

            'vote' => [
                'no_forum_access' => 'ต้องการการอนุญาติในการเข้าถึงฟอรั่มนี้',
                'over' => 'การโหวตได้จบลงแล้วและไม่สามารถโหวตได้อีก',
                'play_more' => 'คุณจำเป็นต้องเล่นมากกว่านี้ถึงจะโหวตในฟอรั่มนี้ได้',
                'voted' => 'ไม่อนุญาติให้เปลี่ยนผลโหวต',

                'user' => [
                    'require_login' => 'กรุณาเข้าสู่ระบบเพื่อทำการโหวต',
                    'restricted' => "ไม่สามารถโหวตได้ในขณะที่ถูกจำกัด",
                    'silenced' => "ไม่สามารถโหลตได้ในขณะที่ถูกเงียบ",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'ต้องการการอนุญาติในการเข้าถึงฟอรั่มนี้',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'หน้าปกที่ระบุไม่ถูกต้อง',
                'not_owner' => 'มีแค่เจ้าของเท่านั้นที่สามารถแก้ไขหน้าปกได้',
            ],
            'store' => [
                'forum_not_allowed' => 'แบบฟอรั่มนี้ไม่รองรับภาพปกหัวเรื่อง',
            ],
        ],

        'view' => [
            'admin_only' => 'มีแค่ผู้ดูแลระบบเท่านั้นที่สามารถดูฟอรั่มนี้',
        ],
    ],

    'room' => [
        'destroy' => [
            'not_owner' => '',
        ],
    ],

    'score' => [
        'pin' => [
            'disabled_type' => "ไม่สามารถปักหมุดคะแนนประเภทนี้ได้",
            'failed' => "ปักหมุดคะแนนที่ไม่ผ่านไม่ได้",
            'not_owner' => 'เจ้าของคะแนนเท่านั้นที่ปักหมุดคะแนนได้',
            'too_many' => 'ปักหมุดคะแนนเยอะเกินไป',
        ],
    ],

    'team' => [
        'application' => [
            'store' => [
                'already_member' => "",
                'already_other_member' => "",
                'currently_applying' => '',
                'team_closed' => '',
                'team_full' => "",
            ],
        ],
        'part' => [
            'is_leader' => "",
            'not_member' => '',
        ],
        'store' => [
            'require_supporter_tag' => '',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'หน้าผู้ใช้ถูกล็อก',
                'not_owner' => 'สามารถแก้ไขได้แค่ Userpage ของตนเอง',
                'require_supporter_tag' => 'จำเป็นต้องมีแท็กผู้สนับสนุน',
            ],
        ],
        'update_email' => [
            'locked' => 'ที่อยู่อีเมลถูกล็อค',
        ],
    ],
];
