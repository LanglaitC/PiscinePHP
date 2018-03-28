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
	foreach($array as $elem)
	{
		if ($i != 1)
		{
			echo($elem);
			echo(" ");
		}
		$i++;
	}
	echo($array[0]);
	if ($j > 0)
		echo("\n");
}
?>
