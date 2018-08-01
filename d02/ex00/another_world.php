#!/usr/bin/php
<?PHP

if ($argc == 1)
	return (0);

$str = preg_replace('/[ \t]{2,}/', ' ', trim($argv[1]));
echo "$str\n";

?>
