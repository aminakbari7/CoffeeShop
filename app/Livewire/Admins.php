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
    public function searchuser()
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
        $adminss = User::select()->where('role', 'admin')->paginate(4);
        return view('livewire.adminuser',['adminss '=>$adminss ]);
    }

    public function deleteuser($id)
    {
        $this->uid = $id;
        user::destroy($this->uid);
        $adminss = User::select()->where('role', 'admin')->paginate(4);
      
        return view('livewire.admins',[ 'adminss'=> $adminss]);
    }
    public function updateuser($id)
    {
        
        $this->key = 1;
        $this->upid = $id;
        $adminss = User::select()->where('role', 'admin')->paginate(4);
      
        return view('livewire.admins',[ 'adminss'=> $adminss]);
    }
    public function render()
    {
        $adminss = User::select()->where('role', 'admin')->paginate(4);
      
        return view('livewire.admins',[ 'adminss'=> $adminss]);
    }
}
