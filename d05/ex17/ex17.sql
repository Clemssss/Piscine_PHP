USE test;
SELECT COUNT(`id_sub`) AS `nb_susc`, ROUND(AVG(`price`), -1) AS `av_susc`, SUM(`duration_sub`) AS `ft`
FROM subscription;
