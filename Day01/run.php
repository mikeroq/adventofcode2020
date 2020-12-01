<?php 
require("class/Day01.php");
use pwnstar\AdventOfCode\Day01;

$findPairs = new Day01("input.txt", 2020);

echo "First Answer: ";
echo $findPairs->findFirstAnswer() . PHP_EOL;

echo "Second Answer: ";
echo $findPairs->findSecondAnswer() . PHP_EOL;