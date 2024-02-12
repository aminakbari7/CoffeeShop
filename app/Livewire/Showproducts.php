<?php

namespace App\Livewire;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Attributes\On;
class Showproducts extends Component
{    use WithPagination;

   public $pid;
   public $size;
   public $key;

    public function delproduct($id)
    {
        $this->pid=$id;
        product::destroy($this->pid);
        Session()->flash('msg', 'حذف شد!'); 
        $this->resetPage();
        $products = Product::orderBy('created_at', 'DESC')->paginate(8);
        $this->size=$products->count();
        return view('livewire.showproducts',['products'=>$products]);
    }


    #[On("usersearch")]
    public function showsearch($search)
    {   
        $this->key=$search;
        $products = Product::select()->where('name','LIKE',"%$search%")->paginate(8);
        $this->size=$products->count();
        return view('livewire.showproducts',['products'=>$products]);

    }
    
    public function render()
    {
        $products = Product::select()->where('name','LIKE',"%$this->key%")->paginate(8);
        $this->size=$products->count();
        return view('livewire.showproducts',['products'=>$products]);
    }
}
