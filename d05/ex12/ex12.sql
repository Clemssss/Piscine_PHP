SELECT `last_name`, `first_name`
FROM test.user_card
WHERE `last_name` LIKE '%-%'
OR `first_name` LIKE '%-%'
ORDER BY `first_name` ASC, `last_name` ASC;
