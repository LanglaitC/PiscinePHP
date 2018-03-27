#!/usr/bin/php
<?php
if ($argc == 2)
{
	if (($str = file_get_contents($argv[1])) !== FALSE)
	{
		preg_match_all("/<a.*>.*a>/", $str, $match);
		print_r($match);
	}
}
