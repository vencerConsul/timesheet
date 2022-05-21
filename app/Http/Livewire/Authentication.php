<?php

namespace App\Http\Livewire;

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
        
        $errors = $this->getErrorBag();
        if($checkPasscode){
            return redirect()->route('login.google');
        }else{
            session()->flash('message', 'Invalid passcode.');
        }
    }

    public function render()
    {
        return view('livewire.authentication')
        ->extends('layouts.app');
    }
}
