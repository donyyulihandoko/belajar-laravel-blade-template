<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineBladeTest extends TestCase
{
    public function testInlineBlade()
    {
        $response = Blade::render('Hallo {{$name}}', [
            'name' => 'Dony'
        ]);

        $this->assertEquals('Hallo Dony', $response);
    }
}
