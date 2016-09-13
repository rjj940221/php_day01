#!/usr/bin/php
<?PHP
if ($argc != 4)
{
	echo "Incorrect Parameters \n";
	exit(0);
}
$op = trim($argv[2], " ");
switch ($op) {
	case "+":
		echo $argv[1] + $argv[3]."\n";
		break;
	case "-":
		echo $argv[1] - $argv[3]."\n";
		break;
	case "*":
		echo $argv[1] * $argv[3]. "\n";
		break;
	case "/":
		echo $argv[1] / $argv[3]."\n";
		break;
	case "%":
		echo $argv[1] % $argv[3]."\n";
		break;

}
?>
