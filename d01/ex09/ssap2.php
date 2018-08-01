#!/usr/bin/php
<?PHP

function	sort_letter($argv)
{
	$tab = array();

	foreach ($argv as $key => $value)
	{
		if (strpos($argv[$key], ' ') && $key >= 1)
		{
			$str_tab = explode(' ', $argv[$key]);
			$tab = array_merge($tab, $str_tab);
		}
		else if ($key >= 1)
		{
			array_push($tab, $argv[$key]);
		}
	}
	sort($tab, SORT_STRING | SORT_FLAG_CASE);
	return ($tab);
}

function	first_group($tab)
{
	foreach ($tab as $key => $value)
	{
		if (($tab[$key][0] >= 'a' && $tab[$key][0] <= 'z')
		|| ($tab[$key][0] >= 'A' && $tab[$key][0] <= 'Z'))
			echo "$tab[$key]\n";
	}
}

function	second_group($tab)
{
	foreach ($tab as $key => $value)
	{
		if ($tab[$key][0] >= '0' && $tab[$key][0] <= '9')
			echo "$tab[$key]\n";
	}
}

function	third_group($tab)
{
	foreach ($tab as $key => $value)
	{
		if ((($tab[$key][0] < 'a' || $tab[$key][0] > 'z')
		&& ($tab[$key][0] < 'A' || $tab[$key][0] > 'Z'))
		&& ($tab[$key][0] < '0' || $tab[$key][0] > '9'))
			echo "$tab[$key]\n";
	}
}

if ($argc == 1)
	return (0);

$tab = sort_letter($argv);
first_group($tab);
second_group($tab);
third_group($tab);

?>
