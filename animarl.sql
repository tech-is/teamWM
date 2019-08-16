/*ANIMARLデータベース 2019/8/9 
**********************************************************************
// 仮登録店舗情報
**********************************************************************/

create database Animarl character set utf8mb4 collate utf8mb4_general_ci;
use Animarl;
create table assumed_shops
(
    assumed_id                int(5) not null auto_increment primary key comment '仮ショップid',
    assumed_email              varchar(100) not null UNIQUE comment 'メールアドレス',
    assumed_code               varchar(100) not null         comment 'パスワードトークン'
);
-- ログインid検索
create index assumed_shops_login on assumed_shops (assumed_email,assumed_code);

/**********************************************************************
/ 店舗情報
/**********************************************************************/
create table shops
(
    shop_id                int(5) not null auto_increment primary key comment 'ショップid',
    shop_name               varchar(100) not null	comment '登録者',
    shop_kana                 varchar(100) not null      comment 'カナ',
    shop_tel                     int(11)                          comment '電話番号',
    shop_address              varchar(100) comment '住所',
    shop_opendate            date                          comment '設立年月日',
    shop_zip_address       int(7)                          comment '郵便番号',
    shop_email              varchar(64) not null UNIQUE	comment 'メールアドレス',
    shop_password       varchar(32) not null        comment 'パスワード',
    shop_memo            text                          comment 'メモ',
    shop_created_at     datetime                  comment '登録日時',
    shop_updated_at    datetime                  comment '更新日時',
    shop_state               int(3) default '1'             comment '削除フラグ'
);
-- 店舗一覧検索
create index shops on shops (shop_id, shop_name);

/**********************************************************************
// 顧客管理情報
//**********************************************************************/
create table customer
(
    customer_id     int(5) not null auto_increment primary key comment '顧客id',
    customer_shop_id    int(5)           comment '顧客管理ショップid',
    customer_name        varchar(200)   not null     comment '顧客名',
    customer_kana        varchar(200)        comment 'カナ',
    customer_tel        int(11)        comment '電話番号',
    customer_zip_adress        int(7)             comment '郵便番号',
    customer_address         varchar(100)           comment '住所',
    customer_mail         varchar(100)	UNIQUE	comment 'メールアドレス',
    customer_magazine       int(1) not null default'0'  comment 'メールマガジン 0:送らない 1:送る',
    customer_group       int(2) default'0'         comment '0:デフォルト',
    customer_add_info         text      comment '追加情報',
    customer_created_at    datetime            comment '登録日時',
    customer_updatedate      datetime            comment '更新日時',
    customer_state               int(3) default '1'   comment '削除フラグ'
);


-- 顧客一覧 index 後で考える
create index customer on customer (customer_id);


/**********************************************************************
// ペットカルテ情報
***********************************************************************/
create table pet
(
    pet_id     int(5) not null auto_increment primary key comment 'ペットid',
    pet_customer_id    int(5) not null          comment '飼い主id',
    pet_name        varchar(200) not null      comment 'ペット名前',
    pet_classification        varchar(11)        comment '分類',
    pet_type        varchar(56)       comment '種類',
    pet_animal_gender        int(1)  default 1     comment '性別 1:オス 2:メス 3:その他',
    pet_contraception         int(1)       comment '去勢の有無',
    pet_body_height           varchar(32)      comment '体高',
    pet_body_weight          varchar(32)      comment '体重',
    pet_birthday             date                  comment '誕生日',
    pet_last_reservdate      date                  comment '最終予約日',
    pet_information              text                  comment 'ペット情報',
    pet_created_at           datetime            comment '登録日時',
    pet_update_at               datetime            comment '更新日時',
    pet_state               int(3) default 1   comment '削除フラグ'
);
create index pet_list on pet (pet_id);

/**********************************************************************
// カレンダーイベント情報
//**********************************************************************/
create table calender_event
(
    event_id     int(5) not null auto_increment primary key comment 'イベントid',
    event_shop_id    int(5) not null          comment 'イベント登録ショップ_id',
    event_title        varchar(200) not null      comment 'タイトル',
    event_start        date not null     comment '開始',
    event_end        date       comment '終了',
    event_staff_id        int(5) not null  comment '担当id',
    event_created_at   datetime       comment '作成日時',
    event_update_at   datetime       comment '更新日時',
    event_state          int(3)      comment '削除フラグ'
);

-- カレンダーから一覧出力index
create index event_list on calender_event (event_id);


/**********************************************************************
// メールマガジン管理
//**********************************************************************/
create table mail_magazine
(
    mail_magazine_id     int(5) not null auto_increment primary key comment 'マガジンid',
    mail_shop_id    int(5)                           comment 'マガジン利用id',
    mail_shop_mail        varchar(100)        comment 'ショップメール',
    mail_type            int(1)                      comment'メールタイプ',
    mail_from_name       varchar(100)        comment '差出人名',
    mail_subject        varchar(56)             comment '件名',
    mail_sendend_at       datetime        comment '最終送信日',
    mail_detail         text      comment '本文',
    mail_created_at        datetime      comment '作成日時',
    mail_updated_at        datetime      comment '更新日時'
);

-- ショップ管理画面から自分のメルマガ一覧出力
create index magazine_list on mail_magazine (mail_shop_id);
-- メールを送るときのindex
create index send_mailmag on mail_magazine (mail_magazine_id);

/**********************************************************************
// 従業員管理情報
**********************************************************************/
create table staff
(
    staff_id     int(5) not null auto_increment primary key comment '従業員id',
    staff_shop_id    int(5)           comment 'スタッフショップid',
    staff_name        varchar(50)        comment '氏名',
    staff_detail       text       comment '備考',
    staff_created_at        datetime        comment '作成日時',
    staff_updated_at        datetime      comment '更新日時'
);

-- 従業員管理一覧
create index staff on staff (staff_id);


/**********************************************************************
// グループ管理情報
//**********************************************************************/
create table rank_group
(
    rank_group_id     int(5) not null auto_increment primary key comment 'グループid',
    rank_group_shop_id    int(5)           comment 'ショップid',
    rank_group_name        varchar(100)        comment 'グループ氏名',
    rank_group_created_at       datetime        comment '作成日時',
    rank_group_update_at        datetime        comment '更新日時'
);

-- グループ管理一覧
create index rank_group on rank_group (rank_group_id);