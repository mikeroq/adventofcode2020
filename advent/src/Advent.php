<?php 
namespace pwnstar\AdventOfCode2020;
require_once "vendor/autoload.php";

class Advent 
{
    public function runDay(string $dayClass, string $input)
    {
        $start_time = microtime(true);
        $class = 'pwnstar\AdventOfCode2020\\' . $dayClass . '\\' . $dayClass;
        $day = new $class($input);
        echo $dayClass . ' - First Answer: ' . $day->findFirstAnswer() . PHP_EOL
            . $dayClass . ' - Second Answer: ' . $day->findSecondAnswer() . PHP_EOL
            . $dayClass . ' - Execution finished in ' . (microtime(true) - $start_time) . ' seconds.' . PHP_EOL;
    }
}