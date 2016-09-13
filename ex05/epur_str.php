#!/usr/bin/php
<?PHP
$re = eregi_replace("[ ]+", " ", $argv[1]);
$re = trim ($re, " ");
$re = rtrim ($re, " ");
echo "$re\n";
?>
