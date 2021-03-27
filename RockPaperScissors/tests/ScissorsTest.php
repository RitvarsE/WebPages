<?php

namespace App\Options;

use PHPUnit\Framework\TestCase;

class ScissorsTest extends TestCase
{

    public function testVictory(): void
    {
        $paper = new Scissors('scissors');
        self::assertTrue($paper->victory(new Paper('paper')));
    }
}
