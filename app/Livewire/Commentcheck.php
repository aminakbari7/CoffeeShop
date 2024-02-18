<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Comment\Comment;

class Commentcheck extends Component
{

    public $cbody="";
    public $product_id="";
    public $size=0;
    public $comments;

    public function mount($product_id)
    {

       
    $this->product_id = $product_id;
    

    }
    public function save($product_id)
    {
    if($this->cbody!=null)
    {
        comment::Create([
        'user_id'=>auth()->user()->id,
        'product_id'=>$product_id,
        'body'=>$this->cbody]);

    }
    $this->cbody="";
    $this->size=comment::select()->where('product_id', $this->product_id)->count();

        $this->comments=comment::select()->where('product_id', $this->product_id)->get();

    }


    public function render()
    { 
        $this->size=comment::select()->where('product_id', $this->product_id)->count();

        $this->comments=comment::select()->where('product_id', $this->product_id)->get();
        return view('livewire.commentcheck');
    }
}
