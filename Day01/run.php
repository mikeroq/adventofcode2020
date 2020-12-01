<?php 
require("class/Day01.php");
use pwnstar\AdventOfCode\Day01;

$day01 = new Day01("input.txt", 2020);

echo "First Answer: ";
echo $day01->findFirstAnswer() . PHP_EOL;

echo "Second Answer: ";
echo $day01->findSecondAnswer() . PHP_EOL;