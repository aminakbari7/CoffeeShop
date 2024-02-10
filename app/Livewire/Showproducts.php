<?php

namespace App\Livewire;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Showproducts extends Component
{    use WithPagination;
    public function render()
    {
       
        $products = Product::orderBy('created_at', 'DESC')->paginate(8);
        return view('livewire.showproducts',['products'=>$products]);
    }
}
