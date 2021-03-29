<?php

namespace App\Services;

use App\Person;
use App\PersonCollection;
use Medoo\Medoo;
use PDO;

class PersonService
{
    private PersonCollection $personCollection;
    private Medoo $database;

    public function __construct()
    {
        $this->personCollection = new PersonCollection();

        $pdo = new PDO('mysql:dbname=registry;host=localhost', 'root', 'kartupelis');
        $this->database = new Medoo([
            'pdo' => $pdo,
            'database_type' => 'mysql'
        ]);
        foreach ($this->database->select('registry', "*") as $person) {
            $this->personCollection->add(new Person($person['name'],
                $person['surname'],
                $person['personid']),
                $person['note']);
        }
    }

    public function getPersonCollection(): PersonCollection
    {
        return $this->personCollection;
    }

    public function addPerson(string $name, string $surname, string $personid, string $note = ''): void
    {
        $this->database->insert("registry", [
            "name" => $name,
            "surname" => $surname,
            "personid" => $personid,
            "note" => $note
        ]);
    }

    public function updatePersonsNote(string $personid, string $note): void
    {
        $this->database->update("registry", ['note' => $note], ['personid' => $personid]);
    }

    public function deleteUser(string $personid): void
    {
        $this->database->delete("registry", ['personid' => $personid]);
    }

    public function findPerson(string $personid): array
    {
        return $this->database->select('registry', '*', ["personid" => $personid]);
    }


}