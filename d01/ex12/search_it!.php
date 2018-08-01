#!/usr/bin/php
<?PHP

if ($argc <= 2)
return (0);

$res = NULL;

foreach ($argv as $key => $value)
{
	if ($key >= 1)
	{
		$info = explode(":", $argv[$key]);
		if (!strcmp($argv[1], $info[0]))
			$res = $info[1];
	}
}
if ($res)
	echo "$res\n";

?>
