<?php

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\ExampleController;

class ExampleControllerTest extends TestCase
{
    public function testExampleMethod()
    {
        $exampleController = new ExampleController();
        $result = $exampleController->exampleMethod();

        $this->assertEquals("Test", $result);
    }

    public function testExampleSecondMethod()
    {
        $exampleController = new ExampleController();
        $result = $exampleController->exampleSecondMethod();

        $this->assertEquals("Second test", $result);
    }
}