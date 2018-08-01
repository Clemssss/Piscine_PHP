#!/usr/bin/php
<?php
date_default_timezone_set('Europe/paris');
$file = fopen("/var/run/utmpx", "r");
while ($utmpx_line = fread($file, 628)) {
	$line = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $utmpx_line);
	$array[$line['line']] = $line;
}
ksort($array);
foreach ($array as $s) {
	if ($s['type'] == 7) {
		print trim($s['user'])." ";
		print trim($s['line'])."  ";
		print (date("M d H:i ", $s['time1']));
		print "\n";
	}
}
?>
