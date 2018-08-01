USE test;
SELECT REVERSE(SUBSTR(`phone_number`, 2)) AS `enohpelet`
FROM distrib
WHERE REVERSE(SUBSTR(`phone_number`, 2)) LIKE '%5';
