<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart\Cart;

class Notif extends Component
{
    public $count;
    public function render()
    {

        
        $this->count=cart::select()->where('user_id', Auth()->user()->id)->get()->count();
       
        return view('livewire.notif', ['count'=>$this->count]);
    }
}
