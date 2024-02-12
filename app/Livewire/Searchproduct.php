<?php

namespace App\Livewire;

use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Searchproduct extends Component
{
    use WithPagination;
    public $search="";
    public $key=-1;

    public $size=0;
    public function searchproduct()
    {
      
        $product = Product::select()->where('name','LIKE',"%$this->search%");
        $this->size=$product->count();
      
        $this->dispatch('usersearch', $this->search);
     
    }
    public function render()
    {   
        return view('livewire.searchproduct');
    }
}
