<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view('isset-empty', [])
            ->assertDontSeeText('Hello')
            ->assertSeeText('I dont have any hobbies');

        $this->view('isset-empty', [
            'name' => 'Dony'
        ])->assertSeeText('Hello My Name is Dony')
            ->assertSeeText('I dont have any hobbies');


        $this->view('isset-empty', [
            'name' => 'Dony',
            'hobbies' => 'coding'
        ])->assertSeeText('Hello My Name is Dony')
            ->assertDontSeeText('I dont have any hobbies');
    }
}
