#!/usr/bin/php
<?php

if ($argc == 2)
{
	$ret = sscanf($argv[1], "%d %c %d %s", $nbr1, $op, $nbr2, $resting);
	if ($ret != 3 || $resting != "" || !is_numeric($nbr1) || !is_numeric($nbr2))
	{
		echo("Syntax Error\n");
		return(0);
	}
	if ($op === '+')
		echo($nbr1 + $nbr2);
	else if ($op === '*')
		echo($nbr1 * $nbr2);
	else if ($op === '/')
		echo($nbr1 / $nbr2);
	else if ($op === '-')
		echo($nbr1 - $nbr2);
	else if ($op === '%')
		echo($nbr1 % $nbr2);
	else
	{
		echo("Syntax Error\n");
		return(0);
	}
	echo("\n");
}
else
	echo("Incorrect Parameters\n");
?>
