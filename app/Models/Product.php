<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Design;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function designs()
    {
        return $this->hasMany(Design::class);
    }

}
