#!/usr/bin/php
<?php
if ($argc == 2)
{
	if (($str = file_get_contents($argv[1])) !== FALSE)
	{
		$str = preg_replace_callback(
			"/(?<=title=)[^>]+(?=(.*>)*<\/a>)|(?<=>)[^>]+(?=(<.*>)*<\/a>)/",
			function ($matches)
			{
				return(strtoupper($matches[0]));
			},
			$str
		);
		echo($str);
	}
}
