<?php
if ($_POST["login"] != "" && $_POST["passwd"] != "" && $_POST["submit"] == "OK")
{
	$password = hash('whirlpool', $_POST["passwd"]);
	if (file_exists("../private") == FALSE)
		mkdir("../private", 0777, true);
	if (file_exists("../private/passwd") == FALSE)
	{
		$array = array(array("login"=>$_POST["login"], "passwd"=>$password));
		$string = serialize($array);
		file_put_contents("../private/passwd", $string);
		echo "OK\n";
	}
	else
	{
		$exist = 0;
		$get = file_get_contents("../private/passwd");
		$unser = unserialize($get);
		foreach ($unser as $elem)
		{
			if ($elem["login"] == $_POST["login"])
				$exist = 1;
		}
		if ($exist == 0)
		{	
			$array2 = array(array("login"=>$_POST["login"], "passwd"=>$password));
			$string2 = serialize($array2);
			file_put_contents("../private/passwd", $string2);
			echo "OK\n";
		}
		else
			echo "ERROR\n";
	}
}
else
	echo "ERROR\n";
?>
