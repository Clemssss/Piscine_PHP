#!/usr/bin/php
<?PHP

echo "Entrez un nombre: ";
while (1)
	{
		$stdin = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
			exit();
		if (is_numeric($stdin) == TRUE)
		{
			if ($stdin % 2 == 0)
				echo "Le chiffre ".$stdin." est Pair\n";
			else
				echo "Le chiffre ".$stdin." est Impair\n";
		}
		else
			echo "'".$stdin."' n'est pas un chiffre\n";
		echo "Entrez un nombre: ";
	}

?>
