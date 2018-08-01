<?php
session_start();
if (!isset($_SESSION["loggued_on_user"]) || $_SESSION["loggued_on_user"] === "")
	echo "ERROR";
else
	echo $_SESSION["loggued_on_user"];
echo "\n";
?>
