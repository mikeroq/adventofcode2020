<?php

namespace pwnstar\AdventOfCode2020\Day05;

use pwnstar\AdventOfCode2020\Day;

class Day05 extends Day
{
    protected array $seats;

    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function part1()
    {
        foreach ($this->input as $line) {
            $row_array = array_fill(0, '128', '0');
            $column_array = array_fill(0, '8', '0');
            $seat = str_split($line, 7);
            $seat[0] = str_split($seat[0], 1);
            $seat[1] = str_split($seat[1], 1);
            foreach ($seat[0] as $key => $value) {
                switch ($value) {
                    case 'F':
                        $row_array = array_chunk($row_array, (count($row_array) / 2), true);
                        $row_array = $row_array[0];
                        break;
                    case 'B':
                        $row_array = array_chunk($row_array, (count($row_array) / 2), true);
                        $row_array = $row_array[1];
                        break;
                }
            }
            foreach ($seat[1] as $key => $value) {
                switch ($value) {
                    case 'L':
                        $column_array = array_chunk($column_array, (count($column_array) / 2), true);
                        $column_array = $column_array[0];
                        break;
                    case 'R':
                        $column_array = array_chunk($column_array, (count($column_array) / 2), true);
                        $column_array = $column_array[1];
                        break;
                }
            }
            $this->seats[] = (array_flip($row_array)[0] * 8 ) + array_flip($column_array)[0];

        }
        return max($this->seats);
    }

    protected function part2()
    {
        if (empty($this->seats)) {
            $this->part1();
        }
        sort($this->seats);
        $last_value = $this->seats[0] - 1;
        foreach($this->seats as $key => $value) {
            if ($value - $last_value !== 1) {
                break;
            }
            $last_value = $value;
        }
        return $last_value + 1;
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
