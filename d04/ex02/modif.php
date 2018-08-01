<?php
if ($_POST["login"] != "" && $_POST["oldpw"] != "" && $_POST["newpw"] != ""
	&& $_POST["submit"] == "OK")
{
	$newpw = hash('whirlpool', $_POST["newpw"]);
	$oldpw = hash('whirlpool', $_POST["oldpw"]);
	$infile = file_get_contents("../private/passwd");
	$unser = unserialize($infile);
	$i = 0;
	$check = 0;
	foreach ($unser as $elem)
	{
		if ($elem["login"] == $_POST["login"] && $oldpw == $elem["passwd"])
		{
			$unser[$i]["passwd"] = $newpw;
			$check = 1;
		}
		$i++;
	}
	if ($check == 1)
	{
		$ser = serialize($unser);
		file_put_contents("../private/passwd", $ser);
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>
