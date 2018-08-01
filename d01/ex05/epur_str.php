#!/usr/bin/php
<?PHP

if ($argc != 2)
	return (0);
$tab = explode(' ', $argv[1]);
foreach ($tab as $key => $elem)
{
	if (ctype_space($tab[$key]) || !$tab[$key])
		unset($tab[$key]);
}
$tab = array_values($tab);
foreach ($tab as $key2 => $elem2)
{
	echo "$tab[$key2]";
	if ($tab[$key2 + 1])
		echo " ";
	else
		echo "\n";
}
?>
