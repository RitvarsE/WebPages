<?php

namespace App\Players;

use App\Options\Options;
use App\Options\OptionsCollection;

interface Players
{
    public function move(OptionsCollection $collection): Options;
}