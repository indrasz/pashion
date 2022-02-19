<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id', 'users_id','size','color'
    ];

    protected $hidden = [

    ];

    public function product(){
        return $this->hasOne( Product::class, 'id', 'products_id' );
    }

    public function attribute(){
        return $this->hasOne( ProductAttribute::class, 'id', 'size' );
    }

    public function component(){
        return $this->hasOne( ProductColor::class, 'id', 'color' );
    }

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id');
    }
}
