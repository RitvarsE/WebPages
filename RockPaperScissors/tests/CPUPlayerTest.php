<?php

namespace App\Players;

use App\Options\OptionsCollection;
use App\Options\Rock;
use PHPUnit\Framework\TestCase;

class CPUPlayerTest extends TestCase
{

    public function testMove()
    {
    $cpuPlayer = new CPUPlayer();
    $collection = new OptionsCollection();
    $collection->add(new Rock('Rock'));
    $cpuPlayer->setOption($collection);
    self::assertEquals(new Rock('Rock'), $cpuPlayer->move($collection));
    }
}
