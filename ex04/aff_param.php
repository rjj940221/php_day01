#!/usr/bin/php
<?PHP
$i=0;
	foreach ($argv as $elm)
	{
		if ($i)
			echo "$elm\n";
		else
			$i++;
	}
?>
