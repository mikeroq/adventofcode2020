<?php

namespace pwnstar\AdventOfCode2020\Day07;

use pwnstar\AdventOfCode2020\Day;

class Day07 extends Day
{


    public function formatInput(): void
    {
        $this->explodeInputByBlankLines();
        array_walk_recursive($this->input, function(&$arrValue, $arrKey){ $arrValue = str_replace(PHP_EOL.PHP_EOL, '', $arrValue);});
    }

    protected function part1()
    {

    }

    protected function part2()
    {

    }

    public function findFirstAnswer()
    {
        return $this->part1();
    }

    public function findSecondAnswer()
    {
        return $this->part2();
    }
}
