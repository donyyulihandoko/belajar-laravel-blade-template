<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testInheritance()
    {
        $this->view('child', [])
            ->assertSeeText('Halaman Utama')
            ->assertSeeText('Default Header')
            ->assertDontSeeText('Default Content')
            ->assertSeeText('Ini adalah Header')
            ->assertSeeText('Ini adalah Content');
    }

    public function testInheritanceDefault()
    {
        $this->view('child-default', [])
            ->assertSeeText('Halaman Utama')
            ->assertSeeText('Default Header')
            ->assertSeeText('Default Content')
            ->assertDontSeeText('Ini adalah Header')
            ->assertDontSeeText('Ini adalah Content');
    }
}
