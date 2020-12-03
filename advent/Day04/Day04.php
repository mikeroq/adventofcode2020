<?php 
namespace pwnstar\AdventOfCode2020\Day04;

use pwnstar\AdventOfCode2020\Day;

class Day04 extends Day
{
    public function formatInput() :void
    {
        $new = [];
        foreach ($this->input as $line) {
            $new[] = str_split($line, 1);
        }
        $this->input = $new;
    }
    protected function part1()
    {
        
    }
    protected function part2()
    {
        
    }
    public function findFirstAnswer()
    {
        // if ($match > 0) {
        //     return $match;
        // }
        return false;
    }
    public function findSecondAnswer() 
    {
        // if ($match > 0) {
        //     return $match;
        // }
        return false;
    }
}
