<?php
namespace App\Service;

class GreetingService
{
    public function greet(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}
