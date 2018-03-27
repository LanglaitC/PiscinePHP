#!/usr/bin/php
<?php

if ($argc >= 2)
{
	$str= preg_replace("/[\t ]+/", " ", $argv[1]);
	echo($str."\n");
}
