<?php 
namespace pwnstar\AdventOfCode2020\Day02;

class Day02
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

    public function findFirstAnswer()
    {
        
    }
    public function findSecondAnswer() 
    {
        
    }
}
