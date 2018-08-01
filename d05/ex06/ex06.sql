SELECT `title`, `summary`
FROM test.film
WHERE UPPER(`summary`) LIKE '%VINCENT%'
ORDER BY `id_film` ASC;
