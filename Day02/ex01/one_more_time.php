#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
function ft_get_month($str)
{
	if (preg_match("/\b[Jj]anvier\b/", $str))
		return (1);
	if (preg_match("/\b[Ff]evrier\b/", $str))
		return (2);
	if (preg_match("/\b[Mm]ars\b/", $str))
		return (3);
	if (preg_match("/\b[Aa]vril\b/", $str))
		return (4);
	if (preg_match("/\b[Mm]ai\b/", $str))
		return (5);
	if (preg_match("/\b[Jj]uin\b/", $str))
		return (6);
	if (preg_match("/\b[Jj]uillet\b/", $str))
		return (7);
	if (preg_match("/\b[Aa]out\b/", $str))
		return (8);
	if (preg_match("/\b[Ss]epembre\b/", $str))
		return (9);
	if (preg_match("/\b[Oo]ctobre\b/", $str))
		return (10);
	if (preg_match("/\b[Nn]ovembre\b/", $str))
		return (11);
	if (preg_match("/\b[Dd]ecembre\b/", $str))
		return (12);
	return (0);
}

function ft_error()
{
	echo("Wrong Format\n");	
	return(1);
}

$regExDay =
"/^(([lL]un|[Mm]ar|[Mm]ercre|[Jj]eu|[Vv]endre|[Ss]ame)(di)|[Dd]imanche)$/";
$regExDate = "/^[0-9]{1,2}$/";
$regExYear = "/^[0-9]{4}$/";
$regExHour = "/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/";
if ($argc == 2)
{
	$month = 0;
	$tab = explode(" ", $argv[1]);
	$month = ft_get_month($tab[2]);
	if (count($tab) != 5)
		return (ft_error());
	if (!preg_match($regExDay, $tab[0]) || !preg_match($regExDate,$tab[1]))
		return (ft_error());
	if (!$month || !preg_match($regExYear, $tab[3]))
		return (ft_error());
	if (!preg_match($regExHour, $tab[4]))
		return (ft_error());
	$hourTab = explode(":", $tab[4]);
	echo(mktime($hourTab[0], $hourTab[1], $hourTab[2], $month, $tab[1], $tab[3])."\n");
//	echo(mktime(12, 02, 21, 11, 12, 2013)."\n");
}
