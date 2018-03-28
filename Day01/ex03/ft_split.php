<?php
function ft_split($str)
{
	$tab = array();
	$array = explode(" ", $str);
	sort($array);
	foreach($array as $elem)
	{
		if ($elem != "")
			array_push($tab, $elem);
	}
	return($tab);
}
?>
