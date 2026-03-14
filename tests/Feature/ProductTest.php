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
        Storage::fake('public');
        $category = ProductCategory::factory()->create();

        $response = $this->post(route('products.store'), [
            'product_name' => 'Thé gingembre',
            'product_desc' => 'Le meilleur Thé gingembre',
            'product_price_pre_tax' => 15.50,
            'product_stock' => 10,
            'product_weight' => 2.5,
            'product_categorie_id' => $category->id,
        ]);

        $response->assertRedirect(route('products.index'));
        $response->assertSessionHas('error', 'produit ajouter');

        $this->assertDatabaseHas('products', [
            'product_name' => 'Thé gingembre',
            'product_stock' => '0'
        ]);
    }

    public function create_product_with_wrong_fileds()
    {
        Storage::fake('public');
        $category = ProductCategory::factory()->create();

        $response = $this->post(route('products.store'), [
            'product_name' => 10,
            'product_desc' => 50,
            'product_price_pre_tax' => 'Le meilleur Thé gingembre',
            'product_stock' => 10,
            'product_weight' => 2.5,
            'product_categorie_id' => $category->id,
        ]);

        $response->assertRedirect(route('products.index'));
        $response->assertSessionHas('success', 'produit ajouter');

        $this->assertDatabaseHas('products', [
            'product_name' => 'Thé gingembre',
            'product_stock' => 10
        ]);
    }


}
