<?php

namespace App\Livewire;

use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $nom, $email, $telephone, $message;
    public function render()
    {
        return view('livewire.contact');
    }


    protected $rules = [
        'nom' => 'string|max:20',
        'telephone' => 'nullable|max:20',
        'message' => 'string',
        'email' => 'required|email',
    ];

    public function contact()
    {
        $this->validate();
        $data = [
            "email" => $this->email,
            "nom" => $this->nom,
            "telephone" => $this->telephone,
            "message" => $this->message
        ];
        Mail::to("kevingassam23@gmail.com")->send(new ContactForm($data));
        session()->flash("success", "Votre message a bien été envoyé");
        $this->reset();
    }
}
