<?php

namespace App;

class PersonCollection
{
    private array $persons;

    public function add(Person $person, string $note): void
    {
        $this->persons[] = [$person, $note];
    }

    public function getPersons(): array
    {
        return $this->persons;
    }

}