<?php

namespace App;

class Person
{
    private string $name;
    private string $surname;
    private string $personID;


    public function __construct(string $name, string $surname, string $personID)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->personID = $personID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPersonID(): string
    {
        return $this->personID;
    }

}