<?php 
namespace pwnstar\AdventOfCode2020\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testPart1Equals7(): void 
    {
        $Day04 = new Day04();
        $Day04->importInput('advent/Day04/test_input.txt');

        $this->assertSame('', $Day04->findFirstAnswer());
    }

    public function testPart2Equals336(): void
    {
        $Day04 = new Day04();
        $Day04->importInput('advent/Day04/test_input.txt');

        $this->assertSame('', $Day04->findSecondAnswer());
    }
}