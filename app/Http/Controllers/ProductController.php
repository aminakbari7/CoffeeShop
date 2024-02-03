<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\cart\Cart;
use Carbon\Carbon;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showsingle($id)
    {
                   
        $product=Product::find($id);
        return view("product.showsingle",compact("product"));
    }
    public function addcart($id)
    {       
        $product=Product::find($id);
        $addcart=Cart::Create(['user_id'=>auth()->user()->id,'product_id'=>$product->id,
       'image'=>$product->image,
        'price'=>$product->price,
        'name'=>$product->name]);
 
        return redirect()->back();
        //return view("product.showsingle",compact("product"));
    }
    public function showcart()
    {
        $cart=cart::select()->where('user_id', Auth()->user()->id)->get();
        $totalprice=cart::select()->where('user_id', Auth()->user()->id)->sum('price');
        return view("product.showcart",compact("cart","totalprice"));
    }
    public function deletecart($id)
    {
                 
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
