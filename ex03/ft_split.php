#!/usr/bin/php
<?PHP
function ft_split($arg)
{
	$replace = eregi_replace("[ ]+", " ", $arg);
	$words = explode(" ", $replace);
	sort($words, SORT_STRING);
	return($words);
}
?>
