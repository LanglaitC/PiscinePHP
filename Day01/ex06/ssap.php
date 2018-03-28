#!/usr/bin/php
<?php
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
	sort($array, SORT_STRING);
	$i = 1;
	$j = count($array);
	foreach($array as $elem)
	{
		echo($elem."\n");
	}
}
?>
