INSERT INTO db_clegirar.ft_table(`login`, `group`, `creation_date`)
SELECT `last_name` AS `login`, 'other' AS `group`, `birthdate` AS `creation_date`
FROM test.user_card
WHERE `last_name` LIKE '%a%' AND LENGTH(`last_name`) < 9 ORDER BY `last_name` ASC LIMIT 10;
