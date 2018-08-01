USE test;
SELECT DATE_FORMAT(`date_last_film`, "%Y-%m-%d") AS `movies`
FROM member
WHERE (DATE_FORMAT(`date_last_film`, "%Y-%m-%d") BETWEEN '2006-10-30' AND '2007-07-27')
OR (MONTH(`date_last_film`) = 12 AND DAY(`date_last_film`) = 24)
ORDER BY DATE_FORMAT(`date_last_film`, "%Y-%m-%d") ASC;
