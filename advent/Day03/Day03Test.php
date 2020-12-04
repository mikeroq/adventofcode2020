<?php 
namespace pwnstar\AdventOfCode2020\Day03;

use PHPUnit\Framework\TestCase;

final class Day03Test extends TestCase
{
    public function testPart1Equals7(): void 
    {
        $day03 = new Day03();
        $day03->importInput('advent/Day03/test_input.txt');

        $this->assertSame(7, $day03->findFirstAnswer());
    }

    public function testPart2Equals336(): void
    {
        $day03 = new Day03();
        $day03->importInput('advent/Day03/test_input.txt');

        $this->assertSame(336, $day03->findSecondAnswer());
    }
}