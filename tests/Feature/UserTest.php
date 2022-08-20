<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_search()
    {
        $response = $this->get('/api/users/admin');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'results' => [
                ['text', 'id']
            ]
        ]);
    }
}
