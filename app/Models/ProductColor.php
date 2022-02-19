<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColor extends Model
{
    use HasFactory;

    protected $fillable = [
        'color', 'products_id'
    ];

    protected $hidden = [

    ];

    public function product(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    } 
}
