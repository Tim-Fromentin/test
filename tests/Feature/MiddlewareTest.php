<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class MiddlewareTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_page_no_connect()
    {
        $response = $this->get('/products');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }


}
