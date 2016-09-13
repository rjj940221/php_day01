#!/usr/bin/php
<?php
$num = 0;
$val = 0;
$re = 0;
$data = array();
function ft_sort($tab)
{
	$size=count($tab);
	for($i=0; $i < $size - 1; $i++)
	{
		for($j = $i + 1; $j < $size; $j++)
		{
			if(strcasecmp($tab[$i][0], $tab[$j][0]) >0 )
			{
				$temp = $tab[$i];
				$tab[$i] = $tab[$j];
				$tab[$j] = $temp;
			}
		}
	}
}
while(! feof(STDIN))
{
	array_push($data, fgetcsv(STDIN,100,";"));
	if ($data[$num][1])
	{
		$re+=$data[$num][1];
		$num++;
		$val++;
	}
}
if (strcmp($argv[1], "average")==false)
	echo $re / $val . "\n";
if (strcasecmp($argv[1], "average_user"))
{
	ft_sort($data);
	foreach ($data as $elm) {
		if($elm[1] != false && $elm[3] !=false){
			echo $elm[0] . ($elm[1] + $elm[3]) / 2 ."\n";
		}
	}
}
if (strcasecmp($argv[1], "moulinette_variance")) {
	
	ft_sort($data);
	foreach ($data as $elm) {
		if($elm[1] != false && $elm[3] !=false){
			echo $elm[0] . ($elm[1] - $elm[3]) . "\n";
		}
	}
}
?>
