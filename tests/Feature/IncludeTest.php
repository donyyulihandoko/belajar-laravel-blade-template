<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include', [])
            ->assertSeeText('Programmer Zaman Now')
            ->assertSeeText('Hello Description')
            ->assertSeeText('Selamat Datang Di Website');

        $this->view('include', [
            'title' => 'Test Include'
        ])->assertSeeText('Test Include')
            ->assertSeeText('Hello Description')
            ->assertSeeText('Selamat Datang Di Website');
    }
}
