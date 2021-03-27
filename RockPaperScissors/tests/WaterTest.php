<?php

namespace App\Options;

use PHPUnit\Framework\TestCase;

class WaterTest extends TestCase
{

    public function testVictory() : void
    {
        $paper = new Water('water');
        self::assertTrue($paper->victory(new Rock('rock')));
    }
    public function testVictory2(): void
    {
        $paper = new Water('water');
        self::assertTrue($paper->victory(new Paper('paper')));
    }
}
