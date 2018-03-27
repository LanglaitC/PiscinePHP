#!/usr/bin/php
<?php

function multiexplode($delimiters, $str)
{
	$ready = str_replace($delimiters, $delimiters[0], $str);
	$launch = explode($delimiters[0], $ready);
	return ($launch);
}

if ($argc != 2)
	echo("Incorrect Parameters\n");
else
{
	$state = 0;
	$tab = (multiexplode(array("+", "/", "*", "-"), $argv[1]));
	if (count($tab) != 2)
	{
		echo("Invalid Syntax\n");
		return (0);
	}
	print_r($tab);
	if (strpos($argv[1], "+"))
		echo(intval(trim($tab[0])) + intval(trim($tab[1])));
	else if (strpos($argv[1], "-"))
		echo(intval(trim($tab[0])) - intval(trim($tab[1])));
	else if (strpos($argv[1], "*"))
		echo(intval(trim($tab[0])) * intval(trim($tab[1])));
	else if (strpos($argv[1], "/"))
		echo(intval(trim($tab[0])) / intval(trim($tab[1])));
	else
	{
		echo("Invalid Syntax\n");
		return (0);
	}
}
