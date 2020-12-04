<?php 
namespace pwnstar\AdventOfCode2020\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1Equals2(): void 
    {
        $day02 = new Day02();
        $day02->importInput('advent/Day02/test_input.txt');

        $this->assertSame(2, $day02->findFirstAnswer());
    }

    public function testPart2Equals1(): void
    {
        $day02 = new Day02();
        $day02->importInput('advent/Day02/test_input.txt');

        $this->assertSame(1, $day02->findSecondAnswer());
    }
}