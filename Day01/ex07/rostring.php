#!/usr/bin/php
<?php
if ($argc >= 2)
{
	$array = array();
	$tab = str_word_count($argv[1], 1);
	foreach($tab as $elem)
		if ($elem != "")
			array_push($array, $elem);
	sort($array);
	$i = 1;
	$j = count($array);
	echo($array[$j - 1]);
	if ($j > 1)
		echo(" ");
	foreach($array as $elem)
	{
		if ($i != $j)
			echo($elem);
		if ($i < $j - 1)
			echo(" ");
		$i++;
	}
	echo("\n");
}
