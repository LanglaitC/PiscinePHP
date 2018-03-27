#!/usr/bin/php
<?php
if ($argc >= 2)
{
	$key = $argv[1];
	$i = 0;
	foreach($argv as $elem)
	{
		$tab = explode(":", $elem);
		if ($tab[0] == $key && count($tab) == 2)
		{
			$i = 1;
			$answer = $tab[1];
		}
	}
	if ($i == 1)
		echo($answer."\n");
}

