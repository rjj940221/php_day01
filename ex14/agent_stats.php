#!/usr/bin/php
<?php
$num = 0;
$re = 0;
while(! feof(STDIN))
{
	$data = (fgetcsv(STDIN,100,";"));
	if ($data[1])
	{
		$num++;
		$re+=$data[1];
	}
}
if (strcmp($argv[1], "average")==false)
	echo $re / $num . "\n";
?>
