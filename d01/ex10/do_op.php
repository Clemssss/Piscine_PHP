#!/usr/bin/php
<?PHP

function	ft_check_op($tab)
{
	if (!strcmp($tab[1], "+"))
		return ($tab[0] + $tab[2]);
	else if (!strcmp($tab[1], "-"))
		return ($tab[0] - $tab[2]);
	else if (!strcmp($tab[1], "*"))
		return ($tab[0] * $tab[2]);
	else if (!strcmp($tab[1], "%"))
		return ($tab[0] % $tab[2]);
	else if (!strcmp($tab[1], "/"))
		return ($tab[0] / $tab[2]);
}

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return (0);
}

$tab = array();

foreach ($argv as $key => $value)
{
	if ($key >= 1)
	{
		$argv[$key] = str_replace(" ", "", $argv[$key]);
		$argv[$key] = str_replace("###antiSlashe###t", "", $argv[$key]);
		array_push($tab, $argv[$key]);
	}
}
$res = ft_check_op($tab);
echo "$res\n";

?>
