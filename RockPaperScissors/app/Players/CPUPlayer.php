<?php

namespace App\Players;

use App\Options\Options;
use App\Options\OptionsCollection;

class CPUPlayer implements Players
{
    private Options $option;

    public function move(OptionsCollection $collection): Options
    {
        return $this->option;
    }

    public function setOption(OptionsCollection $collection): void
    {
        $this->option = $collection->getoptions()[array_rand($collection->getOptions())];
    }
}