<?php

function	auth($login, $passwd)
{
	$check = FALSE;
	$pw = hash('whirlpool', $passwd);
	$file = file_get_contents("../private/passwd");
	$unser = unserialize($file);
	foreach ($unser as $elem)
	{
		if ($elem["login"] === $login && $pw === $elem["passwd"])
			$check = TRUE;
	}
	return ($check);
}

?>
