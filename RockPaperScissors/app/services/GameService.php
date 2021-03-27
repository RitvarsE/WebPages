<?php


namespace App\Services;

use App\Game;

class GameService
{
    private array $storage;

    public function __construct()
    {
        $this->storage = json_decode(file_get_contents('storage/storage.json'), TRUE);
    }

    public function getVictory(): int
    {
        return $this->storage['victory'];
    }

    public function getLost(): int
    {
        return $this->storage['lost'];
    }

    public function getDraw(): int
    {
        return $this->storage['draw'];
    }

    public function addVictory(): void
    {
        $this->storage['victory']++;
        $this->writeJson();
    }

    public function addLost(): void
    {
        $this->storage['lost']++;
        $this->writeJson();
    }

    public function addDraw(): void
    {
        $this->storage['draw']++;
        $this->writeJson();
    }

    public function writeJson(): void
    {
        file_put_contents('storage/storage.json', json_encode($this->storage));
    }

    public function reset(): void
    {
        $this->storage['lost'] = 0;
        $this->storage['victory'] = 0;
        $this->storage['draw'] = 0;
        $this->writeJson();
    }
}