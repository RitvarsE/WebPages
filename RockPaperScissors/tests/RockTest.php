<?php

namespace App\Options;

use PHPUnit\Framework\TestCase;

class RockTest extends TestCase
{

    public function testVictory(): void
    {
        $paper = new Rock('Rock');
        self::assertTrue($paper->victory(new Scissors('scissors')));
    }
}
