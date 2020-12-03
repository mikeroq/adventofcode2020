<?php 
namespace pwnstar\AdventOfCode2020\Day02;

class Day02
{
    protected $input = [];
    
    public function getInput($file)
    {
        $input = explode("\r\n", trim(file_get_contents($file)));
        $this->input = [];
        foreach ($input as $row) {
            $array = explode(" ", $row);
            $range = explode("-", $array[0]);
            $letter = str_replace(":", "", $array[1]);
            $this->input[] = [
                'min' => $range[0],
                'max' => $range[1],
                'letter' => $letter,
                'password' => $array[2],
            ];
        }
    }
    public function findValidPasswords()
    {
        $match = 0;
        foreach ($this->input as $password) {
            $count = substr_count($password['password'], $password['letter']);
            if ($count >= $password['min'] && $count <= $password['max']) {
                $match++;
            }
        }
        return $match;
    }
    public function findValidPasswordsPart2()
    {
        $match = 0;
        foreach ($this->input as $password) {
            $count1 = substr($password['password'], $password['min']-1, 1);
            $count2 = substr($password['password'], $password['max']-1, 1);
            if ($count1 == $password['letter'] && $count2 == $password['letter']) {
                //skip
            } else if ($count1 == $password['letter'] || $count2 == $password['letter']) {
                $match++;
            }   
        }
        return $match;
    }
    public function findFirstAnswer()
    {
        $match = $this->findValidPasswords();
        if ($match > 0) {
            return $match;
        }
        return false;
    }
    public function findSecondAnswer() 
    {
        $match = $this->findValidPasswordsPart2();
        if ($match > 0) {
            return $match;
        }
        return false;
    }
}
