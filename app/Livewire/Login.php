<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $email,$password;

    public function render()
    {
        return view('livewire.login');
    }

    protected $rules = [
        'password' => 'required|max:20',
        'email' => 'required|email',
    ];

    public function connexion(){
        $this->validate();
        // code pour la connexion ici
        $user = User::where("email",$this->email)->first();
        if(!$user){
            session()->flash("error","Cet utilisateur n'est pas enregistré");
            $this->reset(['email']);
            return;
        }
        if (!password_verify($this->password , $user->password)) {
            session()->flash("error","Mot de passe incorrect");
            $this->reset(['password']);
            return;
        };
        auth()->login($user);
        return redirect('/dashboard');

    }
}
