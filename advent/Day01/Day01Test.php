<?php 
namespace pwnstar\AdventOfCode2020\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1Equals514579(): void 
    {
        $day01 = new Day01();
        $day01->importInput('advent/Day01/test_input.txt');

        $this->assertSame($day01->findFirstAnswer(), 514579);
    }

    public function testPart2Equals241861950(): void
    {
        $day01 = new Day01();
        $day01->importInput('advent/Day01/test_input.txt');

        $this->assertSame($day01->findSecondAnswer(), 241861950);
    }
}