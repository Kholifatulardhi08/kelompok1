<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> dc1ed3d761b2bf0925ce594f7c074089ee9e0385
