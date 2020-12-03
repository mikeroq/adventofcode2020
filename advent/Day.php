<?php 
namespace pwnstar\AdventOfCode2020;

class Day 
{
    protected $input = [];

    public function importInput($file) :void
    {
        $this->input = explode("\r\n", trim(file_get_contents($file)));
        $this->formatInput();
    }
    public function testInput($input) :void
    {
        $this->input = $input;
    }
    protected function formatInput() :void
    {
        
    }
}