<?php

namespace App\Livewire;

use App\Mail\sendocument;
use App\Models\televerssements;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class TeleverserAdmin extends Component
{
    use WithFileUploads;
    public $email;
    public $fichier;
    public $titre;

    public function render()
    {
        return view('livewire.televerser-admin');
    }

    protected function rules()
    {
        return [
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'fichier' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'titre' => ['required', 'string'],
        ];
    }

    public function send()
    {
        $this->validate();

        $user = User::where("email", $this->email)->firstOrFail();

        $televersement = new Televerssements();
        $televersement->fichier = $this->fichier->store('public/documents');
        $televersement->id_user_destination = $user->id;
        $televersement->id_auteur = Auth::user()->id;
        $televersement->titre = $this->titre;
        $televersement->save();

        // Envoi du mail avec le document
        Mail::to($user->email)->send(new sendocument($user, $televersement));
        session()->flash("success", "Le document a été envoyé avec succès.");

        $this->reset(['email', 'fichier', 'titre']);
    }
}
