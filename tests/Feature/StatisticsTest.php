<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StatisticsTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/statistics');
        $response->assertStatus(200);
        $response->assertSee('Statistics');
        $response->assertSee('User name');
        $response->assertSee('Task count');
    }
}
