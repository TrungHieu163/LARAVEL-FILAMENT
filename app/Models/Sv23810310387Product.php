<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sv23810310387Product extends Model
{
    protected $table = 'sv23810310387_products';

    protected $fillable = [
        'category_id', 'name', 'slug', 'description', 
        'price', 'stock_quantity', 'image_path', 'status', 'discount_percent'
    ];

    public function category()
    {
        return $this->belongsTo(Sv23810310387Category::class, 'category_id');
    }
}
