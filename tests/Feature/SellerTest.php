<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test; // Import crucial pour #[Test]

class SellerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function create_seller()
    {
        Storage::fake('public');

        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin);


        $response = $this->post(route('sellers.store'), [
            'name' => 'John Doe',
            'email' => 'testUser@gmail.com',
            'password' => '9w$6Uika4,dB+e-v#j19O<lcddI-X/',
            'password_confirmation' => '9w$6Uika4,dB+e-v#j19O<lcddI-X/',
        ]);

        $response->assertSessionHasNoErrors();

        $response->assertRedirect(route('sellers.index'));

        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'testUser@gmail.com',
        ]);
    }
    #[Test]
    public function create_seller_noAdmin()
    {
        Storage::fake('public');

        $seller = User::factory()->create(['role' => 'seller']);
        $this->actingAs($seller);


        $response = $this->post(route('sellers.store'), [
            'name' => 'John Doe',
            'email' => 'testUser@gmail.com',
            'password' => '9w$6Uika4,dB+e-v#j19O<lcddI-X/',
            'password_confirmation' => '9w$6Uika4,dB+e-v#j19O<lcddI-X/',
        ]);


        $response->assertRedirect(route('sellers.index'));
        $response->assertSessionHas('error', 'Seul les administrateurs ont accès a cette page');
        $this->assertDatabaseMissing('users', [
            'name' => 'John Doe',
            'email' => 'testUser@gmail.com',
        ]);
    }
}
