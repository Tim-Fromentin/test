<?php

namespace Tests\Feature;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class DataBaseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
public function insert_user()
{
    DB::table('users')->insert([
        ['id' => 999, 'name' => 'john doe', 'email' => 'john.doe@gmail.com',
            'password' => 'password', 'created_at' => '2025-06-27 14:02:05', 'updated_at' => '2025-06-27 14:02:05',
            'role' => 'seller']
    ]);
    User::factory()->count(1)->create();

    $this->assertDatabaseCount('users', 2);
    $this->assertDatabaseHas('users', [
        'id' => 999
    ]);
}

    public function insert_user_with_wrong_field()
    {
        DB::table('users')->insert([
            ['id' => 999, 'name' => 2, 'email' => 'john.doe@gmail.com',
                'password' => 'password', 'created_at' => '2025-06-27 14:02:05', 'updated_at' => '2025-06-27 14:02:05',
                'role' => 'seller']
        ]);

        $this->assertDatabaseCount('users', 0);
    }



}
