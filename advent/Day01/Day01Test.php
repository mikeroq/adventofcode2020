<?php 
namespace pwnstar\AdventOfCode2020\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1Equals514579(): void 
    {
        $input = [
            '1721',
            '979',
            '366',
            '299',
            '675',
            '1456'
        ];
        $day01 = new Day01();
        $day01->testInput($input);

        $this->assertSame($day01->findFirstAnswer(), 514579);
    }

    public function testPart2Equals241861950(): void
    {
        $input = [
            '1721',
            '979',
            '366',
            '299',
            '675',
            '1456'
        ];
        $day01 = new Day01();
        $day01->testInput($input);

        $this->assertSame($day01->findSecondAnswer(), 241861950);
    }
}