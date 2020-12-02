<?php 
namespace pwnstar\AdventOfCode2020;
require_once "vendor/autoload.php";

use pwnstar\AdventOfCode2020\Day01;

class Advent 
{
    public function runDay(string $dayClass, string $input, $assert)
    {
        $start_time = microtime(true);
        $class = 'pwnstar\AdventOfCode2020\\' . $dayClass . '\\' . $dayClass;
        $day = new $class($input, $assert);

        echo 'First Answer: ' . $day->findFirstAnswer() . PHP_EOL
            . 'Second Answer: ' . $day->findSecondAnswer() . PHP_EOL
            . 'Execution finished in ' . (microtime(true) - $start_time) . ' seconds.';
    }
}