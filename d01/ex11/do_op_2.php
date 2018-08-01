#!/usr/bin/php
<?PHP

function	ft_calc($nb1, $nb2, $op)
{
	if (!strcmp($op, "+"))
		return ($nb1 + $nb2);
	else if (!strcmp($op, "-"))
		return ($nb1 - $nb2);
	else if (!strcmp($op, "*"))
		return ($nb1 * $nb2);
	else if (!strcmp($op, "%"))
		return ($nb1 % $nb2);
	else if (!strcmp($op, "/"))
		return ($nb1 / $nb2);
}

function	ft_check_op($op, $str)
{
	if (strstr($str, $op))
	{
		$tab = explode($op, $str);
		foreach ($tab as $key => $value)
		{
			$tab[$key] = str_replace(" ", "", $tab[$key]);
			$tab[$key] = str_replace("###antiSlashe###t", "", $tab[$key]);
		}
		if (ctype_digit($tab[0]) && ctype_digit($tab[1]))
		{
			$res = ft_calc($tab[0], $tab[1], $op);
			echo "$res\n";
		}
		else
			echo "Syntax Error\n";
		return (1);
	}
	return (0);
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return (0);
}

$op = array("+", "-", "*", "/", "%");

foreach ($op as $key => $value)
{
	if (ft_check_op($op[$key], $argv[1]))
		return (0);
}
echo "Syntax Error\n";

?>
