#!/usr/bin/php
<?php

function is_even()
{
	echo("Entrez un nombre: ");
	$handle = fopen("php://stdin", "r");
	$ligne=fgets($handle);
	if (is_numeric(trim($ligne)) && !strpos(trim($ligne), "."))
	{
		if (intval(trim($ligne)) % 2 == 0)
			echo("Le chiffre ".trim($ligne)." est Pair\n");
		else
			echo("Le chiffre ".trim($ligne)." est Impair\n");
		is_even();
	}
	else if ($ligne)
	{
		echo("'".trim($ligne)."' n'est pas un chiffre\n");
		is_even();
	}
	else
		echo(trim($ligne)."\n");
}

is_even();
?>
