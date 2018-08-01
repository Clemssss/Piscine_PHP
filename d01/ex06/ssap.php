#!/usr/bin/php
<?PHP

if ($argc == 1)
	return (0);

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
sort($tab);
foreach ($tab as $key2 => $value2)
{
	echo "$tab[$key2]\n";
}
?>
