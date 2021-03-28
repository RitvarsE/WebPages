<?php

use App\Services\PersonService;

require_once 'vendor/autoload.php';
$personService = new PersonService();

foreach($personService->getPersonCollection()->getPersons() as $person)
{
    echo $person[0]->getName() . ' ' . $person[0]->getSurname() . ' ' . $person[0]->getPersonID() . " note: $person[1]<br>";
}