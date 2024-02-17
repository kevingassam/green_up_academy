<?php

namespace App\Livewire;

use App\Mail\UserCreated;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Register extends Component
{
    public $nom, $prenom, $email;
    public function render()
    {
        return view('livewire.register');
    }

    protected $rules = [
        'nom' => 'required|max:20',
        'prenom' => 'required|max:20',
        'email' => 'required|email|unique:users',

    ];

    public function save()
    {
        $this->validate();

        $lastUserId = User::latest()->value('id');
        $userId = $lastUserId ? $lastUserId + 1 : 1;

        // Générer le code
        $code = "MY-GUA_" . substr($this->nom, 0, 1) . substr($this->prenom, 0, 1) . $userId;

        $user = new User();
        $user->name = $this->nom;
        $user->prenom = $this->prenom;
        $user->email = $this->email;
        $user->code = Str::upper($code);
        //generer un mot de passe random de 10 element alpha numerique
        $password = Str::random(11);
        $user->password = Hash::make($password);
        $user->save();
        $user->assignRole('user');


        //envoyer le mail avec le mot de passe
        Mail::to($user->email)->send(new UserCreated($user, $password));
        session()->flash("success", "Votre compte a bient été ajouté, vous avez recu vos identifiants par mail");

        //reset form
        $this->reset(['nom', 'prenom', 'email']);
    }
}
