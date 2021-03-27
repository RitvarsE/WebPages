<?php


namespace App\Controllers;


use App\Services\PersonService;

class AddController
{

    public function index(): void
    {
        require_once 'app/Views/AddView.php';
    }
}