<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $timestamps = false;

    protected $table = 'product_categories';
    protected $primaryKey = 'product_categorie_id';

    protected $fillable = ['product_categorie_name', 'product_type_sell'];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class, 'product_categorie_id');
    }

}
