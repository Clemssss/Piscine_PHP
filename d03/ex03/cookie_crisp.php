<?php
if (isset($_GET["action"]) && isset($_GET["name"]))
{
	if (!strcmp($_GET["action"], "del"))
	{
		setcookie($_COOKIE[$_GET["name"]], false, time() - 60 * 60 * 24);
		unset($_COOKIE[$_GET["name"]]);
	}
	else if (isset($_GET["value"]) && !strcmp($_GET["action"], "set"))
		setcookie($_GET["name"], $_GET["value"], time() + (60 * 60 * 24));
	else if (!(strcmp($_GET["action"], "get"))
	&& isset($_COOKIE[$_GET["name"]]))
	{
		echo $_COOKIE[$_GET["name"]];
		echo "\n";
	}
}
?>
