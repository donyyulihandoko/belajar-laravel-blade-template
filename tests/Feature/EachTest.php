<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', [
            'users' => [
                [
                    'name' => 'dony',
                    'hobbies' => ['Coding', 'Jogging']
                ],
                [
                    'name' => 'handoko',
                    'hobbies' => ['Reading', 'Training']
                ]
            ]
        ])->assertSeeInOrder(['.red', 'dony', 'Coding', 'Jogging', 'handoko', 'Reading', 'Training']);
    }
}
