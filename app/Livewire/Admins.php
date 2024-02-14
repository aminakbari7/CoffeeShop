<?php

namespace App\Livewire;
use App\Models\user;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Admins extends Component
{
    use WithPagination;

   
    public $searchuser="";
    public $uid;
    public $key=-1;
    public $upid=0;
    public $newname;
    public $newemail;
    public function searchu()
    {
        $this->resetPage(); 


    }
    public function save($id){
        $user=User::find($id);
        if($this->newemail!=null)
        {
            $user->email = $this->newemail;
        }
        if($this->newname!=null)
        {
            $user->name= $this->newname;
        }
        if($this->newname!=null || $this->newemail!=null)
        {
            $user->save();
        }
       
        $this->uid=0;
        $this->key =-1;
        $userss=user::orderBy('created_at', 'DESC')->paginate(4);
        return view('livewire.adminuser',['userss'=>$userss]);
    }
   public function searchuser()
   {

   }
    public function render()
    {
        $adminss = User::select()->where('role', 'admin')->get();
      
        return view('livewire.admins',[ 'adminss'=> $adminss]);
    }
}
