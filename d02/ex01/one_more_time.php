#!/usr/bin/php
<?PHP

function	get_month($month)
{
	if ($month == "janvier" || $month == "Janvier")
		return (1);
	if ($month == "fevrier" || $month == "Fevrier")
		return (2);
	if ($month == "mars" || $month == "Mars")
		return (3);
	if ($month == "avril" || $month == "Avril")
		return (4);
	if ($month == "mai" || $month == "Mai")
		return (5);
	if ($month == "juin" || $month == "Juin")
		return (6);
	if ($month == "juillet" || $month == "Juillet")
		return (7);
	if ($month == "aout" || $month == "Aout")
		return (8);
	if ($month == "septembre" || $month == "Septembre")
		return (9);
	if ($month == "octobre" || $month == "Octobre")
		return (10);
	if ($month == "novembre" || $month == "Novembre")
		return (11);
	if ($month == "decembre" || $month == "Decembre")
		return (12);
}

if ($argc == 1)
	return (0);

$regex = "/(^[[Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche]) ([0-9]{1,2}) ([[Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre]) ([0-9]{4}) ([0-9]{2}:[0-9]{2}:[0-9]{2}$)/";

if (preg_match($regex, $argv[1]))
{
	preg_match("/([0-9]{2}:)/", $argv[1], $hour_tab);
	$hour = substr($hour_tab[0], 0, -1);
	preg_match("/:([0-9]{2}:)/", $argv[1], $minute_tab);
	$minute = substr($minute_tab[0], 1);
	$minute = substr($minute, 0, -1);
	preg_match("/([0-9]{2}$)/", $argv[1], $second_tab);
	$second = $second_tab[0];
	preg_match("/([[Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre])/", $argv[1], $month_tab);
	$month = get_month($month_tab[0]);
	preg_match("/([0-9]{1,2})/", $argv[1], $day_tab);
	$day = $day_tab[0];
	preg_match("/([0-9]{4})/", $argv[1], $year_tab);
	$year = $year_tab[0];
	date_default_timezone_set("Europe/Paris");
	echo mktime($hour, $minute, $second, $month, $day, $year);
}
else
	echo "Wrong Format\n";

?>
