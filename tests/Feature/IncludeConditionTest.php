<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view('include-condition', [
            'user' => [
                'owner' => true,
                'name' => 'Dony'
            ]
        ])->assertSeeText('Selamat Datang Owner')
            ->assertSeeText('Silahkan Masuk ke menu laporan untuk melihat laporan keuangan')
            ->assertSeeText('Hello Dony');
    }
}
