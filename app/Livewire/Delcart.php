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
      
        Cart::destroy($id);
       //$this->cart=cart::select()->where('user_id', Auth()->user()->id)->get();
        $this->dispatch('update');
      
    }
    public function mount()
    {
        $this->cart=cart::select()->where('user_id', Auth()->user()->id)->get();
        $this->totalprice=cart::select()->where('user_id', Auth()->user()->id)->sum('price');

    }
    public function render()
    {
        $this->mount();
        return view('livewire.delcart');
    }
}