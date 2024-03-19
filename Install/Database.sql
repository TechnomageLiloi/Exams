CREATE TABLE `rune_questions` (
    `key_question` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
    `type` tinyint(3) unsigned NOT NULL,
    `program` json NOT NULL,
    `theory` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `dt` timestamp NOT NULL,
    `data` json NOT NULL,
    `power` tinyint(3) unsigned NOT NULL DEFAULT '1',
    PRIMARY KEY (`key_question`)
);

create table rune_report
(
    key_report timestamp not null,
    key_question bigint unsigned not null,
    result bool not null,
    comment varchar(250) not null,
    data json not null,
    constraint rune_report_pk
        primary key (key_report, key_question),
    constraint rune_report_rune_questions_key_question_fk
        foreign key (key_question) references rune_questions (key_question)
            on update cascade on delete cascade
);