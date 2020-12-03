<?php 
namespace pwnstar\AdventOfCode2020\Day03;

use pwnstar\AdventOfCode2020\Day;

class Day03 extends Day
{
    public function formatInput() :void
    {
        $new = [];
        foreach ($this->input as $line) {
            $new[] = str_split($line, 1);
        }
        $this->input = $new;
    }
    protected function countTrees($right, $down)
    {
        $tree = 0;
        $x = $y = 0;
        foreach($this->input as $line) {
            if ($y >= count($this->input)) {
                break;
            }
            if ($x >= count($line)) {
                $x -= count($line);
            }
            if ($this->input[$y][$x] === "#") {
                $tree++;
            }
            $x += $right;
            $y += $down;
        }
        return $tree;
    }
    public function findFirstAnswer()
    {
        $match = $this->countTrees(3, 1);
        if ($match > 0) {
            return $match;
        }
        return false;
    }
    public function findSecondAnswer() 
    {
        $match = array_product([
            $this->countTrees(1, 1),
            $this->countTrees(3, 1),
            $this->countTrees(5, 1),
            $this->countTrees(7, 1),
            $this->countTrees(1, 2)
        ]);
        if ($match > 0) {
            return $match;
        }
        return false;
    }
}
