<?php

namespace App\Players;

use App\Options\Options;
use App\Options\OptionsCollection;

class UserPlayer implements Players
{
    private string $userChoose;

    public function move(OptionsCollection $collection): Options
    {
        return $collection->getoptions()[array_search($this->getUserChoose(),
            $collection->getOptionsNames(), true)];
    }

    public function getUserChoose(): string
    {
        return $this->userChoose;
    }

    public function setUserChoose(string $userChoose): void
    {
        $this->userChoose = $userChoose;
    }
}