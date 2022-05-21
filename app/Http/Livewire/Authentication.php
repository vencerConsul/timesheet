<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Laravel\Socialite\Facades\Socialite;

class Authentication extends Component
{
    public $passcode;

    public function checkpasscode(){
        $this->validate([
            'passcode' => 'required'
        ]);

        $checkPasscode = \App\Models\TechnodreamPasscodeModel::where('passcode', $this->passcode)->first();
        
        if($checkPasscode){
            return redirect()->route('login.google');
        }else{
            session()->flash('message', 'Invalid passcode.');
        }
    }

    // Google login
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('home');
    }

    // create user or login 
    protected function _registerOrLoginUser($data){
        $user = User::where('email', '=', $data->email)->first();
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar_url = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }

    public function render()
    {
        return view('livewire.authentication')->extends('layouts.app');
        
    }
}
