<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHelloView()
    {
        $this->get('/hello')
            ->assertSeeText('Laravel');
    }

    public function testHelloWorldView()
    {
        $this->get('/hello/world')
            ->assertSeeText('Laravel');
    }

    public function testHelloViewWithoutRoute()
    {
        $this->view('/hello', [
            'name' => 'Laravel'
        ])->assertSeeText('Laravel');
    }

    public function testHelloWorldViewWithoutRoute()
    {
        $this->view('/hello/world', [
            'name' => 'Laravel'
        ])->assertSeeText('Laravel');
    }
}
