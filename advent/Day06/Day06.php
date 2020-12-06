<?php

namespace pwnstar\AdventOfCode2020\Day06;

use pwnstar\AdventOfCode2020\Day;

class Day06 extends Day
{
    protected array $answersCount;
    protected array $answers;

    public function formatInput(): void
    {
        $this->explodeInputByBlankLines();
        array_walk_recursive($this->input, function(&$arrValue, $arrKey){ $arrValue = str_replace(PHP_EOL.PHP_EOL, '', $arrValue);});

    }

    protected function part1()
    {
        foreach ($this->input as $answer) {
            $answer = str_replace("\r\n", '', $answer);
            $this->answersCount[] = count(array_filter(count_chars($answer)));
        }
        return array_sum($this->answersCount);
    }

    protected function part2()
    {
        foreach ($this->input as $answer) {
            $people = explode("\r\n", $answer);
            $peopleArrays = [];
            foreach ($people as $person) {
                $peopleArrays[] = array_filter(count_chars($person));
            }
            if (count($peopleArrays) > 1) {
                $result = count(array_intersect_key(...$peopleArrays));
            } else {
                $result = count($peopleArrays[0]);
            }

            $this->answers[] = $result;
        }
        //will clean up tomorrow
        return array_sum($this->answers);
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
