<?php
include 'src/PalindromeDetector.php';
echo 'Enter string to check' . PHP_EOL;
$detector = new PalindromeDetector(fgets(STDIN));
echo $detector->getResult();