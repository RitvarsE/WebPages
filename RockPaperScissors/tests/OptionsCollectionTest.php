<?php

namespace App\Options;

use PHPUnit\Framework\TestCase;

class OptionsCollectionTest extends TestCase
{

    public function testGetOptionsNames(): void
    {
        $optionCollection = new OptionsCollection();
        $optionCollection->add(new Rock('Rock'));
        self::assertEquals(['Rock'], $optionCollection->getOptionsNames());
    }

    public function testGetOptions(): void
    {
    $optionCollection = new OptionsCollection();
    $optionCollection->add(new Rock('Rock'));
    self::assertEquals([new Rock('Rock')], $optionCollection->getOptions());
    }
}
