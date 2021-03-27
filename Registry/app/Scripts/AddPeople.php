<?php
namespace App\Scripts;

use App\Services\PersonService;

require '../../vendor/autoload.php';
include '../Views/HomeView.php';
$personService = new PersonService();
//uztaisīt pārbaudi uz to vai dati ir derīgi, tad pievienot un izmest paziņojumu, ka veiksmīgi izpildīts.
$personService->addPerson($_POST['fname'],$_POST['lname'], $_POST['personid']);
echo 'You added' . $_POST['fname'];