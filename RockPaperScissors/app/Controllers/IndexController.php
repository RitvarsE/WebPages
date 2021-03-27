<?php


namespace App\Controllers;


use App\Game;
use App\Options\OptionsCollection;
use App\Options\Paper;
use App\Options\Rock;
use App\Options\Scissors;
use App\Options\Water;
use App\Players\CPUPlayer;
use App\Players\UserPlayer;
use App\Services\GameService;

class IndexController
{
    private OptionsCollection $rpsOptions;
    private UserPlayer $userPlayer;
    private CPUPlayer $cpuPlayer;
    private GameService $gameService;

    public function __construct()
    {
        $this->gameService = new GameService();
        $this->rpsOptions = new OptionsCollection();
        $this->rpsOptions->add(new Rock('Rock'));
        $this->rpsOptions->add(new Paper('Paper'));
        $this->rpsOptions->add(new Scissors('Scissors'));
        $this->rpsOptions->add(new Water('Water'));
        $this->userPlayer = new UserPlayer();
        $this->cpuPlayer = new CPUPlayer();

    }

    public function index(): void
    {
        require_once 'app/Views/HomeView.php';
    }

    public function result(): void
    {
        require_once 'app/Views/ResultView.php';
    }
}