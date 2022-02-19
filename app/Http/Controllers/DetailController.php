<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $product = Product::with(['galleries','attributes','user'])->where('slug', $id)->firstOrFail();

        return view('pages.detail', [
            'product' => $product
            
        ]);
    }

    public function add(Request $request, $id)
    {   
        // dd($request->all());
        $data = [
            'products_id' => $id,
            'size'=>$request->size,
            'color'=>$request->color,
            'users_id' => Auth::user()->id           
        ];

        Cart::create($data);

        return redirect()->route('cart');
    }
}
