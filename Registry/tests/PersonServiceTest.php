<?php

namespace App\Services;

use Medoo\Medoo;
use PDO;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class PersonServiceTest extends TestCase
{
    protected function setUp(): void
    {

        $pdo = new PDO('mysql:dbname=registry;host=localhost', 'root', 'kartupelis');
        $database = new Medoo([
            'pdo' => $pdo,
            'database_type' => 'mysql'
        ]);
    }
    public function testAddPerson():void
    {
        $service = new PersonService();
        $service->addPerson('Agris', 'Pūpols', 10101012122);
    }
}
