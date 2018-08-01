#!/usr/bin/php
<?PHP
if ($argc == 1)
	return (0);
$str = file_get_contents($argv[1]);
preg_match_all('/<[i | I][m | M][g | G].{0,}src=["|\/|h][[:graph:]]+/', $str, $match);
$f = 0;
while ($match[0][$f]) {
	$val = substr(strstr($match[0][$f], "src="), 5);
	$vl = str_replace('"', '', $val);
	$vl = str_replace('>', '', $vl);
	if ($vl[0][0] == "/")
		$match[0][$f] = $argv[1] . $vl;
	else
		$match[0][$f] = $vl;
	$f++;
}
$val = $argv[1];
if (substr($argv[1], 0, 7) == "http://")
	$val = substr($argv[1], 7);
if (file_exists($val) == FALSE)
	mkdir($val, 0777, true);
foreach ($match[0] as $key) {
	$imgurl = $key;
	$imagename = basename($imgurl);
	if (!file_exists('./$val/'.$imagename))
	{
		$image = file_get_contents($imgurl);
		file_put_contents($val.'/' . $imagename, $image);
	}
}

?>
