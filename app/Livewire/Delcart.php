<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Cart\Cart;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
class Delcart extends Component
{
    use WithPagination;
    public  $cart;
    public $totalprice;
    public $del;
    public function delcart($id)
    {
        $this->del=$id;
        Cart::destroy( $this->del);
        $this->mount();
        $this->dispatch('update');
        Session()->flash('msg', 'حذف شد!'); 
        return view('livewire.delcart', ['cart'=> $this->cart]);
    }
    public function mount()
    {
        $this->cart=cart::select()->where('user_id', Auth()->user()->id)->get();
        $this->totalprice=cart::select()->where('user_id', Auth()->user()->id)->sum('price');

    }
    public function render()
    {
        return view('livewire.delcart',['cart'=> $this->cart]);
    }
}
