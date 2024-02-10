<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Cart\Cart;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
class Creatproduct extends Component
{
    use WithFileUploads;
    public $image ;
    public $price ;
    public $name ;
    public $description ;
    public function save()
    {

        $namei = md5($this->image . microtime()).'.'.$this->image->extension();
        $this->image->storeAs('images', $namei,'public');
        Product::Create([
        'description'=>$this->description,
       'image'=>$namei,
        'price'=>$this->price,
        'name'=>$this->name]);
        Session()->flash('msg', 'اضافه شد!'); 
        $this->render();
    }
    public function render()
    {
        return view('livewire.creatproduct');
    }
}
