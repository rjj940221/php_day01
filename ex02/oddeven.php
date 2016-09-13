#!/usr/bin/php
<?PHP

while (1)
{
echo "enter a number: ";
$line = fgets(STDIN);
if ($line == FALSE)
	break;
$line = rtrim($line, "\n");
if (is_numeric($line))
{
	if ($line % 2 == 0)
		echo "The number $line is even \n";
	else
		echo "The number $line is odd \n";
}
else
	echo "$line is not a number\n";
}
?>
