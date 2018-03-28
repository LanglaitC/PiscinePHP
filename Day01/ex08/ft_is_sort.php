<?php
function ft_is_sort($array)
{
	$i = 0;
	$tmp = $array;
	sort($array, SORT_STRING);
	foreach($tmp as $elem)
	{
		if ($elem != $array[$i])
			return (FALSE);
		$i++;
	}
	return (TRUE);
}
?>
