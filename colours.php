<?php
$n = "\n";
$end = "\e[39m"; // used to take things back to normal

$red = "\e[31m";
$grn = "\e[32m";
$yel = "\e[33m";
$blu = "\e[34m";
$mag = "\e[35m";
$cyn = "\e[36m";

$lrd = "\e[31m";
$lgn = "\e[32m";
$lyl = "\e[33m";
$lbu = "\e[34m";
$lmg = "\e[35m";
$lcn = "\e[36m";

function red($text)
{
	global $red,$n,$end;
	echo $red.$text.$n.$end;
}

function grn($text)
{
	global $grn,$n,$end;
	echo $grn.$text.$n.$end;
}

function yel($text)
{
	global $yel,$n,$end;
	echo $yel.$text.$n.$end;
}

function blu($text)
{
	global $blu,$n,$end;
	echo $blu.$text.$n.$end;
}

function mag($text)
{
	global $mag,$n,$end;
	echo $mag.$text.$n.$end;
}

function cyn($text)
{
	global $cyn,$n,$end;
	echo $cyn.$text.$n.$end;
}

?>