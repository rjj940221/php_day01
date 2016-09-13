#!/usr/bin/php
<?PHP

function ft_split($arg)
{
	$replace = eregi_replace("[ ]+", " ", $arg);
	$words = explode(" ", $replace);
	return($words);
}

$words = ft_split($argv[1]);
$size = count($words, 0);
for($i = 1; $i < $size; $i++)
{
	echo $words[$i]." ";
}
echo "$words[0]\n";
?>
