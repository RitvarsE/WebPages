<?php

namespace App\Options;

use PHPUnit\Framework\TestCase;

class PaperTest extends TestCase
{

    public function testVictory() : void
    {
        $paper = new Paper('paper');
        self::assertTrue($paper->victory(new Rock('rock')));
    }
    public function testName(): void
    {
        $paper = new Paper('paper');
        self::assertEquals('paper', $paper->getName());
    }
}
