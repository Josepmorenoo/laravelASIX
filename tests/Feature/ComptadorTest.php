<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ComptadorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    #[Test] public function increment_counter(): void
    {
        $response = $this->post('/incrementar');

        $response->assertStatus(302);
        $this->assertEquals(1,session('comptador'));
    }
}
