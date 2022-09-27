<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class Shop extends Controller
{
    //
    public function show($id){
        $product = Product::findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0){
            $avgRating = $sumRating/$countRating;
        }

        return view( 'front.shop.show', compact('product', 'avgRating'));
    }

    public function postComment(Request $request){
        ProductComment::created($request->all());

        return redirect()->back();
    }

    public function index(){
        $products = Product::paginate(6);

        return view('front.shop.index', compact('products'));
    }
}
