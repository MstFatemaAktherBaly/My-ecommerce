<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addProduct(){
        return view('products.addProduct');
    }

    //product Validation

    function storeProduct(Request $request){

        $product = new Product();

        $request->validate([
            'title'=> 'required',
            'price' => 'required|numeric',
            'selling_price' => 'required_with:anotherfield|numeric',
            'sku' => 'required',
            'brand_name' => 'required',
        ]); 
        
        // $product->title = $request->title;
        // $product->slug = $request->slug;
        // $product->price = $request->price;
        // $product->selling_price = $request->selling_price;
        // $product->sku = $request->sku;
        // $product->stock = $request->stock;
        // $product->brand_name = $request->brand;
        // $product->short_detail = $request->short_detail;
        // $product->long_text = $request->long_text;
        // $product->status = $request->status;
        // $product->featured = $request->featured;
        // $product->feutured_img = $request->feutured_img;
        // $product->cross_sell = $request->cross_sell;
        // $product->save();
        return back()->with( 'success_msg','Product has been added successfully!');

    }
}
