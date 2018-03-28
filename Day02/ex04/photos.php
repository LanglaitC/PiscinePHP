#!/usr/bin/php
<?php
if ($argc == 2)
{
		if (($c = curl_init($argv[1])))
		{
			curl_setopt($c, CURLOPT_URL, $argv[1]);
			curl_setopt($c, CURLOPT_TIMEOUT, 12); 
			curl_setopt($c, CURLOPT_RETURNTRANSFER, TRUE);
			$str = curl_exec($c);	
			curl_close($c);
			$str = preg_replace_callback(
			"/(?<=src=\")[^\"]+(?=\"[^>])/",
			function ($matches)
			{
				echo("$matches[0]\n\n\n");
				$ch = curl_init($argv[1]);
				$fp = fopen($matches[0], 'wb');
				curl_setopt($ch, CURLOPT_FILE, $fp);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_exec($ch);
				curl_close($ch);
				fclose($fp);
			},
			$str);
		}
}
?>
