#!/usr/bin/php
<?PHP

if ($argc == 1)
	return (0);

$fd = fopen($argv[1], "r+");
$tab = array();

while ($line = trim(fgets($fd)))
	array_push($tab, $line);

foreach ($tab as $key => $value)
{
	if (preg_match('/(href)/', $tab[$key]))
	{
		$tab[$key] = preg_replace('/(title=".*")/e', 'strtoupper("$1")', $tab[$key]);
		$tab[$key] = preg_replace('/(TITLE)/e', 'strtolower("$1")', $tab[$key]);
		preg_match('/<a( [^>]+)?>(.*)</Ui', $tab[$key], $matches);
		$last = end($matches);
		$tab[$key] = preg_replace('/('.$last .')/e', 'strtoupper("$1")', $tab[$key]);
		echo "$tab[$key]\n";
	}
	else
		echo "$tab[$key]\n";
}
fclose($fd);

?>
