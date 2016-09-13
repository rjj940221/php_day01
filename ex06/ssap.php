#!/usr/bin/php
<?PHP
function ft_split($arg)
{
	$replace = eregi_replace("[ ]+", " ", $arg);
	$words = explode(" ", $replace);
	sort($words, SORT_STRING);
	return($words);
}
$list=array();
$i=0;
	foreach ($argv as $elm)
	{
		if ($i)
		{
			$list = array_merge($list,ft_split($elm));
		}
		else
			$i++;
	}
	sort($list, SORT_STRING);
	foreach($list as $elm)
	{
		echo "$elm\n";
	}
?>
