<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart\Cart;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;


class Addcart extends Component
{
 
    public $product_id="";
    public $count="";
    public function save()
    {

       
        $product=Product::find($this->product_id);
        $addcart=Cart::Create(['user_id'=>auth()->user()->id,'product_id'=>$product->id,
       'image'=>$product->image,
        'price'=>$product->price,
        'name'=>$product->name]);
        $this->dispatch('update');
        Session()->flash('msg', 'اضافه شد!'); 
       
        

    }
    

    public function mount($product_id)
    {
    $this->product_id = $product_id;
    }
    public function render()
    {
        return view('livewire.addcart');
    }
}
