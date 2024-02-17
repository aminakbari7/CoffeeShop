<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart\Cart;
use App\Models\user;
use App\Models\Product\Product;
class Adminpanel extends Component
{

    public $usersize=0;
    public $adminsize=0;
    public $productsize=0;
    
    public function render()
    {
    $this->usersize=user::count();
    $this->productsize=Product::count();
    $this->adminsize=user::select()->where('role', 'admin')->count();
        return view('livewire.adminpanel');
    }
}
