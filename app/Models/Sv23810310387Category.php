<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sv23810310387Category extends Model
{
    protected $table = 'sv23810310387_categories';
    
    protected $fillable = ['name', 'slug', 'description', 'is_visible'];
}
