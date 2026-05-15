<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'category_id',
        'supplier_id',
        'barcode',
        'description',
        'generic_name',
        'brand_name',
        'active_ingredient',
        'concentration',
        'pharmaceutical_form',
        'presentation',
        'unit_measure',
        'cost_price',
        'sale_price',
        'stock',
        'min_stock',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
