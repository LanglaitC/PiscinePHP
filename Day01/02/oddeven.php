#!/usr/bin/php
<?php
function is_even()
{
	echo("Entrez un nombre : ");
	$handle = fopen("php://stdin", "r");
	$ligne=fgets($handle);
	if (is_numeric(trim($ligne)))
	{
		echo(trim($ligne)." est un nombre\n");
	}
	else
	{
		echo addcslashes($ligne, 'A..z');
		echo(trim($ligne)." n'est pas un nombre\n");
	}
}

while(1)
	is_even();
