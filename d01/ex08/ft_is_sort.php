<?PHP

function	ft_is_sort($tab)
{
	foreach ($tab as $key => $value)
	{
		if ($tab[$key + 1] && strcmp($tab[$key], $tab[$key + 1]) > 0)
			return (FALSE);
	}
	return (TRUE);
}

?>
