#!/usr/bin/php
<?PHP
 if ($argc != 2)
 {
	echo "Incorrect Parameters\n";
	exit (0);
 }
 if (strchr($argv[1], "+"))
 {
	 $vars = explode("+", $argv[1]);
	 if (count($vars) != 2)
	 {
		 echo "Syntax Error wrong number of terms\n";
		 exit (0);
	 }
	 $vars[0] = trim($vars[0], " ");
	 $vars[1] = trim($vars[1], " ");
	 if (is_numeric($vars[0]) == false || is_numeric($vars[1]) == false)
	 {
		 echo "Syntax Error\n";
		 exit (0);
	 }
	 echo $vars[0] + $vars[1] . "\n";
 }
 elseif (strchr($argv[1], "-"))
 {
	 $vars = explode("-", $argv[1]);
	 if (count($vars) != 2)
	 {
		 echo "Syntax Error wrong number of terms\n";
		 exit (0);
	 }
	 $vars[0] = trim($vars[0], " ");
	 $vars[1] = trim($vars[1], " ");
	 if (is_numeric($vars[0]) == false || is_numeric($vars[1]) == false)
	 {
		 echo "Syntax Error\n";
		 exit (0);
	 }
	 echo $vars[0] - $vars[1] . "\n";
 }
 elseif (strchr($argv[1], "*"))
 {
	 $vars = explode("*", $argv[1]);
	 if (count($vars) != 2)
	 {
		 echo "Syntax Error wrong number of terms\n";
		 exit (0);
	 }
	 $vars[0] = trim($vars[0], " ");
	 $vars[1] = trim($vars[1], " ");
	 if (is_numeric($vars[0]) == false || is_numeric($vars[1]) == false)
	 {
		 echo "Syntax Error\n";
		 exit (0);
	 }
	 echo $vars[0] * $vars[1] . "\n";
 }
 elseif (strchr($argv[1], "/"))
 {
	 $vars = explode("/", $argv[1]);
	 if (count($vars) != 2)
	 {
		 echo "Syntax Error wrong number of terms\n";
		 exit (0);
	 }
	 $vars[0] = trim($vars[0], " ");
	 $vars[1] = trim($vars[1], " ");
	 if (is_numeric($vars[0]) == false || is_numeric($vars[1]) == false)
	 {
		 echo "Syntax Error\n";
		 exit (0);
	 }
	 echo $vars[0] / $vars[1] . "\n";
 }
 elseif (strchr($argv[1], "%"))
 {
	 $vars = explode("%", $argv[1]);
	 if (count($vars) != 2)
	 {
		 echo "Syntax Error wrong number of terms\n";
		 exit (0);
	 }
	 $vars[0] = trim($vars[0], " ");
	 $vars[1] = trim($vars[1], " ");
	 if (is_numeric($vars[0]) == false || is_numeric($vars[1]) == false)
	 {
		 echo "Syntax Error\n";
		 exit (0);
	 }
	 echo $vars[0] % $vars[1] . "\n";
 }
 else
	 echo "Syntax Error\n";
?>
