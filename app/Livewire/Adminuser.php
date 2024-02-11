<?php
namespace App\Livewire;
use Livewire\WithPagination;
use App\Models\Cart\Cart;
use App\Models\user;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Adminuser extends Component
{    use WithPagination;


    public $uid;
    public $key=-1;
    public $upid=0;
    public $newname;
    public $newemail;



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
    
public function deleteuser($id)
{


    $this->uid = $id;
    user::destroy($this->uid);
    $userss=user::orderBy('created_at', 'DESC')->paginate(4);
    return view('livewire.adminuser',['userss'=>$userss]);
}
public function updateuser($id)
{
    
    $this->key = 1;
    $this->upid = $id;
    $userss=user::orderBy('created_at', 'DESC')->paginate(4);
    return view('livewire.adminuser',['userss'=>$userss]);
}

    public function render()
    {
        
        $userss=user::orderBy('created_at', 'DESC')->paginate(4);
        return view('livewire.adminuser',['userss'=>$userss]);
    }
}
