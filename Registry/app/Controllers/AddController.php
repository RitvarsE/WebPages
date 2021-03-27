<?php


namespace App\Controllers;


use App\Services\PersonService;

class AddController
{
    private PersonService $personService;

    public function __construct()
    {
        $this->personService = new PersonService();
    }

    public function index(): void
    {
        require_once 'app/Views/AddView.php';
    }
}