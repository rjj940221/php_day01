#!/usr/bin/php
<?php
$num = 0;
$val = 0;
$re = 0;
$data = array(array());
$line;
function ft_sort($tab)
{
	$size=count($tab);
	for($i=0; $i < $size - 1; $i++)
	{
		for($j = $i + 1; $j < $size; $j++)
		{
			echo "$i to $j comper ";
			echo $tab[$i][0];
			echo " ";
			echo $tab[$j][0];
			echo "\n";
			if(strcasecmp($tab[$i][0], $tab[$j][0]) > 0)
			{
				$temp = $tab[$i];
				$tab[$i] = $tab[$j];
				$tab[$j] = $temp;
			}
		}
	}
	return ($tab);
}
if ($argc == 2)
{
	while(! feof(STDIN))
	{
		if ($num)
			$line = fgetcsv(STDIN,1000,";");
		else
			fgetcsv(STDIN,1000,";");
		if ($num && $line[1])
		{
			$re+=$line[1];
			$val++;
		}
		if ($num)
		{
			$data[$num -1][0] = $line[0];
			$data[$num -1][1] = $line[1];
			$data[$num -1][2] = $line[2];
			$data[$num -1][3] = $line[3];
		}
		$num++;
	}
	if (strcmp($argv[1], "average")==false)
		echo $re / $val . "\n";
	if (strcasecmp($argv[1], "average_user") == false)
	{
		$data = ft_sort($data);
		foreach ($data as $elm) {
			if($elm[1] != false && $elm[3] !=false){
				echo $elm[0] ." ". ($elm[1] + $elm[3]) / 2 ."\n";
			}
		}
	}
	if (strcasecmp($argv[1], "moulinette_variance") == false) 
	{

		$data = ft_sort($data);
		foreach ($data as $elm) {
			if($elm[1] != false && $elm[3] !=false){
				echo $elm[0] . " " . ($elm[1] - $elm[3]) . "\n";
			}
		}
	}
}
?>
