SELECT `title`, `summary`
FROM test.film
WHERE `summary` LIKE '%42%'
OR `title` LIKE '%42%'
ORDER BY `duration` ASC;
