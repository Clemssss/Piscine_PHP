#!/usr/bin/php
<?PHP

function	epur_and_tab($str)
{
	$tab = explode(' ', $str);
	foreach ($tab as $key => $elem)
	{
		if (ctype_space($tab[$key]) || !$tab[$key])
			unset($tab[$key]);
	}
	$tab = array_values($tab);
	return ($tab);
}

if (!$argv[1])
	return (0);
$tab = epur_and_tab($argv[1]);
$first_line = $tab[0];
array_shift($tab);
array_push($tab, $first_line);
foreach ($tab as $key => $value)
{
	echo "$tab[$key]";
	if ($tab[$key + 1])
		echo " ";
}
echo "\n";
?>
