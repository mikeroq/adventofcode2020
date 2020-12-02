<?php 
namespace pwnstar\AdventOfCode2020\Day01;

class Day01
{
    protected $input = [];
    protected $target;
    protected $found = [];
    
    public function __construct($file, $target) 
    {
        $this->target = $target;
        $this->readInput($file);
    }

    protected function readInput($file)
    {
        $this->input = explode("\r\n", trim(file_get_contents($file)));
    }

    public function getInput()
    {
        return $this->input;
    }

    public function getSum()
    {
        return $this->sum;
    }

    protected function findTwoSums()
    {
        $haystack = $this->input;
        foreach ($haystack as $key => $value) {
            unset($haystack[$key]);
            $findMatch = array_search(($this->target - $value), $haystack);
            if ($findMatch) {
                $this->found = [$this->input[$key], $this->input[$findMatch]];
                return true;
            }
        }
        return false;
    }

    protected function findThreeSums()
    {
        $left = $right = '';
        $haystack = $this->input;
        sort($haystack);
        $size = sizeof($haystack);
        for ($i = 0; $i < $size - 2; $i++) { 
            $left = $i + 1; 
            $right = $size - 1;  
            while ($left < $right) { 
                if ($haystack[$i] + $haystack[$left] + $haystack[$right] == $this->target) { 
                    return $this->found = [$haystack[$i], $haystack[$left], $haystack[$right]];
                } else if ($haystack[$i] + $haystack[$left] + $haystack[$right] < $this->target) {
                    $left++; 
                } else {
                    $right--; 
                } 
            } 
        }
        return false;
    }

    public function findFirstAnswer()
    {
        if ($this->findTwoSums()) {
            return array_product($this->found);
        }
        return false;        
    }
    public function findSecondAnswer() 
    {
        if ($this->findThreeSums()) {
            return array_product($this->found);
        }
        return false;   
    }
}
