<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart\Cart;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
class Delcart extends Component
{
    public function delcart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        Session()->flash('msg', 'حذف  شد!'); 
    }
    public function render()
    {
        $totalprice=cart::select()->where('user_id', Auth()->user()->id)->sum('price');
        $cart=cart::select()->where('user_id', Auth()->user()->id)->get();
        return view('livewire.delcart',['cart'=>$cart,'totalprice'=>$totalprice]);
    }
}
