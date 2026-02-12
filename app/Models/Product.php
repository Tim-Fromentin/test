<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_desc',
        'product_price_pre_tax',
        'product_img',
        'product_stock',
        'product_weight',
        'product_categorie_id'
    ];
    protected $table = 'products';
    protected $primaryKey = 'product_serial_number';
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_categorie_id');
    }
}
