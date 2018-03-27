#!/usr/bin/php
<?php
if ($argc != 4)
	echo("Incorrect Parameters\n");
else
{
	if (trim($argv[2]) == "+")
		echo(intval(trim($argv[1])) + intval(trim($argv[3])));
	else if (trim($argv[2]) == "-")
		echo(intval(trim($argv[1])) - intval(trim($argv[3])));
	else if (trim($argv[2]) == "/")
		echo(intval(trim($argv[1])) / intval(trim($argv[3])));
	else
		echo(intval(trim($argv[1])) * intval(trim($argv[3])));
	echo("\n");
}
