#!/usr/bin/php
<?php

function is_alpha($c)
{
	return (($c >= 'A' && $c <= 'Z') || ($c > 'a' && $c < 'z') ? 1 : 0);
}

function is_number($c)
{
	return ($c >= '0' && $c <= '9' ? 1 : 0);
}
if ($argc >= 2)
{
	$i = 0;
	$array = array();
	foreach($argv as $elem)
	{
		$tmp = explode(" ", $elem);
		if ($i != 0)
		{
			foreach($tmp as $elem)
				if ($elem != "")
					array_push($array, $elem);
		}
		$i++;
	}
	sort($array, SORT_FLAG_CASE | SORT_NATURAL);
	foreach($array as $elem)
		if (is_alpha($elem[0]))
			echo($elem."\n");
	sort($array, SORT_STRING);
	foreach($array as $elem)
		if (is_number($elem[0]))
			echo($elem."\n");
	foreach($array as $elem)
		if (is_alpha($elem[0]) == 0 && is_number($elem[0]) == 0)
			echo($elem."\n");
}
?>
