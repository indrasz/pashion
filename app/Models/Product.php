<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductGallery;
use App\Models\ProductAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'users_id', 'categories_id', 'price', 'description', 'slug','stock'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany( ProductGallery::class, 'products_id', 'id' );
    }

    public function attributes(){
        return $this->hasMany( ProductAttribute::class, 'products_id', 'id' );
    }
    public function colors(){
        return $this->hasMany( ProductColor::class, 'products_id', 'id' );
    }

    public function user(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }

    public function category(){
        return $this->belongsTo( Category::class, 'categories_id', 'id');
    }
}
