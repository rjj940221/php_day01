#!/usr/bin/php
<?PHP
function ft_split($arg)
{
	$replace = eregi_replace("[ ]+", " ", $arg);
	$words = explode(" ", $replace);
	return($words);
}

function ft_swap($arg1, $arg2)
{
	$temp = $arg1;
	$arg1 = $arg2;
	$arg2 = $temp;
	echo "swap $arg1 $arg2\n";
}

$list=array();
$i=0;
	foreach ($argv as $elm)
	{
		if ($i)
			$list = array_merge($list,ft_split($elm));
		else
			$i++;
	}
	$size = count($list);
	$alpha = array();
	$num = array();
	$else = array();
	for ($j = 0; $j < $size; $j++)
	{
			if (ctype_digit($list[$j]))
				array_push($num, $list[$j]);
			elseif (ctype_alnum($list[$j]))
				array_push($alpha, $list[$j]);
			else 
				array_push($else, $list[$j]);
	}
	sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);
	sort($num, SORT_STRING);
	sort($else, SORT_REGULAR);
	foreach($alpha as $elm)
		echo "$elm\n";
	foreach($num as $elm)
		echo "$elm\n";
	foreach($else as $elm)
		echo "$elm\n";
?>
