<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/tasks');
        $response->assertStatus(200);
        $response->assertSee('Tasks');
        $response->assertSee('Create Task');
        $response->assertSee('Title');
        $response->assertSee('Description');
        $response->assertSee('Assigned name');
        $response->assertSee('Admin name');
    }

    /**
     *
     * @return void
     */
    public function test_create()
    {
        $response = $this->get('/task');
        $response->assertStatus(200);
        $response->assertSee('Create Task');
        $response->assertSee('Title');
        $response->assertSee('Description');
        $response->assertSee('Assigned User');
        $response->assertSee('Admin Name');
        $response->assertSee('Submit');
    }
}
