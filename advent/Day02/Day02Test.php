<?php 
namespace pwnstar\AdventOfCode2020\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1Equals2(): void 
    {
        $day02 = new Day02();
        $day02->importInput('advent/Day02/test_input.txt');

        $this->assertSame($day02->findFirstAnswer(), 2);
    }

    public function testPart2Equals1(): void
    {
        $day02 = new Day02();
        $day02->importInput('advent/Day02/test_input.txt');

        $this->assertSame($day02->findSecondAnswer(), 1);
    }
}