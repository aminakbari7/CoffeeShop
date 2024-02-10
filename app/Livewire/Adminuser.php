<?php


namespace App\Livewire;
use Livewire\WithPagination;
use App\Models\Cart\Cart;
use App\Models\user;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Adminuser extends Component
{    use WithPagination;

    public $uid;
public function deleteuser($id)
{


    $this->uid = $id;
    user::destroy($this->uid);
    $users=user::all();
    return view('livewire.adminuser',['users'=>$users]);
}

    public function render()
    {
        $users=user::all();
        return view('livewire.adminuser',['users'=>$users]);
    }
}
