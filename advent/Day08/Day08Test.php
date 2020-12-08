<?php 
namespace pwnstar\AdventOfCode2020\Day08;

use PHPUnit\Framework\TestCase;

final class Day08Test extends TestCase
{
    public function testPart1TestInputEquals11(): void
    {
        $Day08 = new Day08();
        $Day08->importInput('./advent/Day08/test_input.txt');

        $this->assertSame(11, $Day08->findFirstAnswer());
    }

    public function testPart2TestInputEquals6(): void
    {
        $Day08 = new Day08();
        $Day08->importInput('./advent/Day08/test_input.txt');

        $this->assertSame(6, $Day08->findSecondAnswer());
    }


    public function testPart1EqualsRealAnswer6612(): void
    {
        $Day08 = new Day08();
        $Day08->importInput('./advent/Day08/input.txt');

        $this->assertSame(6612, $Day08->findFirstAnswer());
    }

    public function testPart2EqualsRealAnswer3268(): void
    {
        $Day08 = new Day08();
        $Day08->importInput('./advent/Day08/input.txt');

        $this->assertSame(3268, $Day08->findSecondAnswer());
    }
}