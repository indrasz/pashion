<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transactions_id', 
        'products_id',
        'price',
        'size',
        'color',
       
    ];

    protected $hidden = [

    ];

    public function product(){
        return $this->hasOne( Product::class, 'id', 'products_id' );
    }

    public function transaction(){
        return $this->hasOne( Transaction::class, 'id', 'transactions_id' );
    }
    
    public function attribute(){
        return $this->hasOne( ProductAttribute::class, 'id', 'size' );
    }

    public function component(){
        return $this->hasOne( ProductColor::class, 'id', 'color' );
    }
}
