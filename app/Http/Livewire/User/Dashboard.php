<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $breaks = 'vencer';

    public function breakOut(){
        $this->breaks = "hello world";
        \App\Events\breaktime::dispatch($this->breaks);
    }

    public function switchMode(){
        if(Auth::user()->mode){
            User::find(Auth::id())->update(['mode' => false]);
        }else{
            User::find(Auth::id())->update(['mode' => true]);
        }
    }

    // logout User
    public function logout() {
        Auth::logout();

        return redirect()->route('authenticate');
    }

    public function render()
    {
        $user = User::where('id', Auth::id())->first();
        $isDark = $user->mode;

        return view('livewire.user.dashboard', compact(['isDark']))->extends('layouts.app');
    }
}
