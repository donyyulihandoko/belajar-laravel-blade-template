<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view('while', [
            'i' => 0
        ])->assertSeeText('This Current Value 0')
            ->assertSeeText('This Current Value 1')
            ->assertSeeText('This Current Value 2')
            ->assertSeeText('This Current Value 3')
            ->assertSeeText('This Current Value 4')
            ->assertSeeText('This Current Value 5')
            ->assertSeeText('This Current Value 6')
            ->assertSeeText('This Current Value 7')
            ->assertSeeText('This Current Value 8')
            ->assertSeeText('This Current Value 9');
    }
}
