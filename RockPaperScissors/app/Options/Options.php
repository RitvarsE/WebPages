<?php

namespace App\Options;
interface Options
{
    public function __construct(string $name);

    public function getName(): string;

    public function victory(Options $option): bool;
}