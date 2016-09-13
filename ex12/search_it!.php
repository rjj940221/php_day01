#!/usr/bin/php
<?PHP
$key = $argv[1];
$last;
for($i = 2; $i < $argc; $i++)
{
	$val=explode(":", $argv[$i]);
	if(strcmp($val[0],$key) == false)
		$last = "$val[1] \n";
}
echo $last;
?>
