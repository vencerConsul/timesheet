<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{



    // logout User
    public function logout() {
        Auth::logout();

        return redirect()->route('authenticate');
    }

    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
