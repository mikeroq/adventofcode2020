<?php 
namespace pwnstar\AdventOfCode;

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

    protected function findSums()
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

    public function findAnswer()
    {
        if ($this->findSums()) {
            return array_product($this->found);
        }
        return false;        
    }
}
