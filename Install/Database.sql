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
) 