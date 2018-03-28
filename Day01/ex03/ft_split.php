<?php 
function ft_split($str)
{
	$tab = array();
	$array = explode(" ", $str);
	sort($array, SORT_STRING);
	foreach($array as $elem)
	{
		if ($elem != "")
			$tab[].=$elem;
	}
	return($tab);
}
?>
