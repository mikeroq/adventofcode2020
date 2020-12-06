<?php 
namespace pwnstar\AdventOfCode2020\Day06;

use PHPUnit\Framework\TestCase;

final class Day06Test extends TestCase
{
    public function testTestInput(): void
    {
        $Day06 = new Day06();
        $Day06->importInput('./advent/Day06/test_input.txt');

        $this->assertSame(820, $Day06->findFirstAnswer());
    }

    public function testPart1(): void
    {
        $Day06 = new Day06();
        $Day06->importInput('./advent/Day06/input.txt');

        $this->assertSame(991, $Day06->findFirstAnswer());
    }

    public function testPart2(): void
    {
        $Day06 = new Day06();
        $Day06->importInput('./advent/Day06/input.txt');

        $this->assertSame(534, $Day06->findSecondAnswer());
    }
}