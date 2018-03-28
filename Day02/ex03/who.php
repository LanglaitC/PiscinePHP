#!/usr/bin/php
<?php

	$binary = "a256a/a4b/a32c/id/ie/I2f/a256g/i16h";
	$fd = fopen("/var/run/utmpx", "r");
	while($str = fread($fd, 628))
	{
		$array = unpack($binary, $str);
		print_r($array);
	}
?>
