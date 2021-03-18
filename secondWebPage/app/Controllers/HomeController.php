<?php

namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        $homepage = 'Welcome to our homepage';
        require_once 'app/Views/HomeView.php';
    }
}