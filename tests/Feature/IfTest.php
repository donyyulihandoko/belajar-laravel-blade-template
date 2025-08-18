<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    public function testIF()
    {
        $this->view('if', [
            'hobbies' => []
        ])->assertSeeText("i dont have hobby!");

        $this->view('if', [
            'hobbies' => ['Coding']
        ])->assertSeeText("i have one hobby!");

        $this->view('if', [
            'hobbies' => ['Coding', 'Reading']
        ])->assertSeeText("i have mutltiple hobbies!");
    }
}
