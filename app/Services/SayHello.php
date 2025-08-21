<?php

namespace App\Services;

class SayHello
{
    public function SayHello(string $name): string
    {
        return "Hello $name";
    }
}
