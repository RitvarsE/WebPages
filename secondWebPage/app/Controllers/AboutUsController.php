<?php


namespace App\Controllers;

class AboutUsController
{
    public function index(): void
    {
        $aboutus = 'This is a page about us. ';
        require_once 'app/Views/AboutUs.php';
    }
}