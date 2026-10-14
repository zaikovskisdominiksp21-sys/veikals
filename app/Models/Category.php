<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // Kategorijai ir daudz produktu
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
