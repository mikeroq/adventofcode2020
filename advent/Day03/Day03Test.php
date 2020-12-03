<?php 
namespace pwnstar\AdventOfCode2020\Day03;

use PHPUnit\Framework\TestCase;

final class Day03Test extends TestCase
{
    public function testPart1Equals514579(): void 
    {
        $input = [
            
        ];
        $day03 = new Day03();
        $day03->testInput($input);

        $this->assertSame($day03->findFirstAnswer(), 2);
    }

    public function testPart2Equals241861950(): void
    {
        $input = [

        ];
        $day03 = new Day03();
        $day03->testInput($input);

        $this->assertSame($day03->findSecondAnswer(), 1);
    }
}