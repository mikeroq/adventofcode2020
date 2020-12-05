<?php

namespace pwnstar\AdventOfCode2020;

class Day
{
    /**
     * @var array
     */
    protected array $input = [];

    /**
     * @param $file
     */
    public function importInput($file): void
    {
//        $this->input = explode("\r\n", trim(file_get_contents($file)));
        $this->input = preg_split('#\n\s*\n#Uis' , file_get_contents($file));
        $this->formatInput();
    }

    protected function formatInput(): void
    {
    }
}