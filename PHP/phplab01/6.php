<?php
$str = "Able was I ere I saw Elba";
$str=str_replace(' ','',$str);
$str=strtolower($str);
$reverse=strrev($str);
if($str==$reverse)
{
	echo " Palindrome";
}
else
{
	echo "not";
}