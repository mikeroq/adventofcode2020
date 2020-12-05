<?php 
namespace pwnstar\AdventOfCode2020\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1Equals514579(): void 
    {
        $day01 = new Day01();
        $day01->importInput('test_input.txt');

        $this->assertSame(514579, $day01->findFirstAnswer());
    }

    public function testPart2Equals241861950(): void
    {
        $day01 = new Day01();
        $day01->importInput('test_input.txt');

        $this->assertSame(241861950, $day01->findSecondAnswer());
    }
}