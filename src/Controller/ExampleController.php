<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ExampleController
{
    public function exampleMethod()
    {
        return "Test";
    }
    
    public function exampleSecondMethod()
    {
        return "Second test";
    }
}