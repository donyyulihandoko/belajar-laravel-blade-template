<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendingBladeTemplateTest extends TestCase
{
    public function testExtendingBlade()
    {
        $this->view('extendin', [
            'name' => 'Dony'
        ])->assertSeeText('Hello Dony');
    }
}
