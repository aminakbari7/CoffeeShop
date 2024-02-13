<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\user;
class Adminshow extends Component
{public $admins;
    public function render()
    {
        $this->admins=user::select()->where('role', 'admin');
        return view('livewire.adminshow');
    }
}
