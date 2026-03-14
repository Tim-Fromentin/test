<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class ClientTest extends TestCase
{
    use RefreshDatabase; // Pour vider la base entre chaque test

    #[Test]
    public function a_client_can_be_created()
    {
        // 1. On crée un utilisateur et on simule sa connexion
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // 2. Maintenant on tente l'insertion
        $response = $this->post(route('clients.store'), [
            'client_firstName' => 'John',
            'client_lastName' => 'Doe',
            'client_email' => 'john.doe@example.com',
            'client_born_date' => '1990-01-01',
            'client_adress' => '12 rue de la Paix, Blois',
        ]);

        // 3. Là, ça devrait rediriger vers l'index
        $response->assertRedirect(route('clients.index'));
        $response->assertSessionHas('success', 'Client créé');

        $this->assertDatabaseHas('clients', [
            'client_email' => 'john.doe@example.com'
        ]);
    }
}
