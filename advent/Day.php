<?php

namespace pwnstar\AdventOfCode2020;

class Day
{
    /**
     * @var array
     */
    protected array $input = [];

    protected string $file;
    /**
     * @param $file
     */
    public function importInput($file): void
    {
        $this->file = file_get_contents($file);
        $this->formatInput();
    }

    protected function formatInput(): void
    {
    }

    public function explodeInputByNewLine()
    {
        $this->input = explode("\r\n", $this->file);
    }
    public function explodeInputByBlankLines()
    {
        $this->input = preg_split('#\n\s*\n#Uis' , $this->file);
    }
}