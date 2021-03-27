<?php

namespace App\Players;

use App\Options\OptionsCollection;
use App\Options\Rock;
use PHPUnit\Framework\TestCase;

class UserPlayerTest extends TestCase
{

    public function testMove(): void
    {
    $userPlayer = new UserPlayer();
    $userPlayer->setUserChoose('Rock');
    $collection = new OptionsCollection();
    $collection->add(new Rock('Rock'));
    $userPlayer->move($collection);
    self::assertEquals(new Rock('Rock'), $userPlayer->move($collection));

    }

    public function testGetUserChoose(): void
    {
    $userPlayer = new UserPlayer();
    $userPlayer->setUserChoose('Rock');
    self::assertEquals('Rock',$userPlayer->getUserChoose());
    }
}
