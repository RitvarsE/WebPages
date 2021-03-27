<?php

namespace App\Controllers;

use App\Services\PersonService;

class HomeController
{
    private PersonService $PersonService;
    public function __construct()
    {
        $this->PersonService = new PersonService();
    }

    public function index(): void
    {
        require_once 'app/Views/HomeView.php';

    }

}