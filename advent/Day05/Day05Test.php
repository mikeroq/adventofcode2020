<?php 
namespace pwnstar\AdventOfCode2020\Day05;

use PHPUnit\Framework\TestCase;

final class Day05 extends TestCase
{
    public function testValidPassportsEquals2WithTestList(): void
    {
        $Day05 = new Day05();
        $Day05->importInput('./advent/Day05/test_input.txt');

        $this->assertSame(2, $Day05->findFirstAnswer());
    }

    public function testValidPassportsEquals4WithAllValidList(): void
    {
        $Day05 = new Day05();
        $Day05->importInput('./advent/Day05/test_valid_passports.txt');

        $this->assertSame(4, $Day05->findSecondAnswer());
    }

    public function testValidPassportsEquals0WithAllInvalidList(): void
    {
        $Day05 = new Day05();
        $Day05->importInput('./advent/Day05/test_invalid_passports.txt');

        $this->assertSame(0, $Day05->findSecondAnswer());
    }
    public function testValidPassportsEqualsRealAnswer(): void
    {
        $Day05 = new Day05();
        $Day05->importInput('./advent/Day05/input.txt');

        $this->assertSame(156, $Day05->findSecondAnswer());
    }
}