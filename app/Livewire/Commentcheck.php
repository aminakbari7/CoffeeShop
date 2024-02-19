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
    public $delid;
    public $keyu=-1;
    public $newbody="";
    public $idu=-1;
    public function updatec($comment_id)
    {
        $this->keyu=1;
        $this->idu=$comment_id;
        $this->size=comment::select()->where('product_id', $this->product_id)->count();
        $this->comments=comment::select()->where('product_id', $this->product_id)->get();
        return view('livewire.commentcheck');
    }
    public function editc($id)
    {
       
        if($this->newbody!=null)
        {
            $temp=Comment::find($id);
            $temp->body=$this->newbody;
            $temp->save();
            
        }
        
        $this->keyu=-1;
        $this->idu=-1;
        $this->size=comment::select()->where('product_id', $this->product_id)->count();
        $this->comments=comment::select()->where('product_id', $this->product_id)->get();
        return view('livewire.commentcheck');
        
    }
    public function mount($product_id)
    {
    $this->product_id = $product_id;
    }
    public function deletec($id)
    {
        $this->delid=$id;
        comment::destroy($this->delid);
        $this->size=comment::select()->where('product_id', $this->product_id)->count();
        $this->comments=comment::select()->where('product_id', $this->product_id)->get();
        return view('livewire.commentcheck');
    }



    public function save($product_id)
    {

    if($this->cbody!="")
    {
        comment::Create([
        'user_id'=>auth()->user()->id,
        'product_id'=>$product_id,
        'body'=>$this->cbody]);
        $this->cbody="";
        $this->size=comment::select()->where('product_id', $this->product_id)->count();
        $this->comments=comment::select()->where('product_id', $this->product_id)->get();
        return view('livewire.commentcheck',['cbody'=>$this->cbody]);

    }
    
    
    }


    public function render()
    { 
        $this->cbody="";
        $this->size=comment::select()->where('product_id', $this->product_id)->count();
        $this->comments=comment::select()->where('product_id', $this->product_id)->get();
        return view('livewire.commentcheck');
    }
}
