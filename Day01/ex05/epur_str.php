#!/usr/bin/php
<?php
if ($argc == 2)
{
	$tab = array();
	$tmp = explode(" ", $argv[1]);
	foreach($tmp as $elem)
		if ($elem != "")
			array_push($tab, $elem);
	$i = count($tab);
	$j = 1;
	foreach ($tab as $elem)
	{
		echo($elem);
		if ($i != $j)
			echo(" ");
		$j++;
	}
	echo("\n");
}
?>
