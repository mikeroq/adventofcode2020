<?php 
namespace pwnstar\AdventOfCode2020\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1Equals514579(): void 
    {
        $input = [
            [
                'min' => 1,
                'max' => 3,
                'letter' => 'a',
                'password' => 'abcde',
            ],
            [
                'min' => 1,
                'max' => 3,
                'letter' => 'b',
                'password' => 'cdefg',
            ],
            [
                'min' => 2,
                'max' => 9,
                'letter' => 'c',
                'password' => 'ccccccccc',
            ],
        ];
        $day02 = new Day02();
        $day02->testInput($input);

        $this->assertSame($day02->findFirstAnswer(), 2);
    }

    public function testPart2Equals241861950(): void
    {
        $input = [
            [
                'min' => 1,
                'max' => 3,
                'letter' => 'a',
                'password' => 'abcde',
            ],
            [
                'min' => 1,
                'max' => 3,
                'letter' => 'b',
                'password' => 'cdefg',
            ],
            [
                'min' => 2,
                'max' => 9,
                'letter' => 'c',
                'password' => 'ccccccccc',
            ],
        ];
        $day02 = new Day02();
        $day02->testInput($input);

        $this->assertSame($day02->findSecondAnswer(), 1);
    }
}