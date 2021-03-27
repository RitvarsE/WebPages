<?php

namespace App\Options;

class OptionsCollection
{
    private array $options;
    private array $optionNames;

    public function add(Options $option): void
    {
        $this->options[] = $option;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getOptionsNames(): array
    {
        foreach ($this->options as $option) {
            $this->optionNames[] = $option->getName();
        }
        return $this->optionNames;
    }
}