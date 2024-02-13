<?php

namespace App\Livewire;
use App\Models\user;
use Livewire\Component;

class Admins extends Component
{

   
       
public function mount(){
  
  

}
    public function render()
    {
        $adminss = User::select()->where('role', 'admin')->get();
      
        return view('livewire.admins',[ 'adminss'=> $adminss]);
    }
}
