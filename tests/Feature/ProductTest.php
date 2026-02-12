<?php

namespace Tests\Feature;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_product_can_be_stored()
    {
        // 1. Préparer l'environnement
        Storage::fake('public'); // Simule le disque de stockage
        $category = ProductCategory::factory()->create(); // On crée une catégorie pour l'ID

        // 2. Agir
        $response = $this->post(route('products.store'), [
            'product_name' => 'Mon aspirateur',
            'product_desc' => 'Un super aspirateur ultra puissant',
            'product_price_pre_tax' => 150.50,
            'product_stock' => 10,
            'product_weight' => 2.5,
            'product_categorie_id' => $category->id,
        ]);

        // 3. Vérifier
        $response->assertRedirect(route('products.index'));
        $response->assertSessionHas('success', 'produit ajouter');

        $this->assertDatabaseHas('products', [
            'product_name' => 'Mon aspirateur',
            'product_stock' => 10
        ]);
    }


}
