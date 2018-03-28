#!/usr/bin/php
<?php

function is_alpha($c)
{
	return (($c >= 'A' && $c <= 'Z') || ($c >= 'a' && $c <= 'z') ? 1 : 0);
}

function is_number($c)
{
	return ($c >= '0' && $c <= '9' ? 1 : 0);
}


function get_type($c)
{
	if (is_alpha($c))
		return (1);
	else if (is_number($c))
		return (2);
	else
		return (3);
}

function ft_strcmp($str1, $str2)
{
	$i = 0;

	$str1 = strtolower($str1);
	$str2 = strtolower($str2);
	while($str1[$i] && $str2[$i])
	{
		if (get_type($str1[$i]) > get_type($str2[$i]))
			return (-1);		
		if (get_type($str1[$i]) < get_type($str2[$i]))
			return (1);
		if ($str1[$i] > $str2[$i])
			return (-1);
		if ($str1[$i] < $str2[$i])
			return (1);
		$i++;
	}
	if ($i == strlen($str1))
		return (1);
	else
		return(-1);
	return ($str1[$i] - $str2[$i]);
}

function ft_sort_array($array)
{
	$i = 0;
	$k = count($array);
	while($i < $k)
	{
		$l = $i + 1;
		while($l < $k)
		{
			if (ft_strcmp($array[$i], $array[$l]) < 0)
			{
				$tmp = $array[$i];
				$array[$i] = $array[$l];
				$array[$l] = $tmp;
			}
			$l++;
		}
		$i++;
	}
	return ($array);
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
	$array = ft_sort_array($array);
	foreach($array as $elem)
			echo($elem."\n");
}
?>
