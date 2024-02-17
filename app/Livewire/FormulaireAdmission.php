<?php

namespace App\Livewire;

use App\Models\dossiers;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;


class FormulaireAdmission extends Component
{
    use WithFileUploads;

    public $formulaire, $cv, $lettre, $portfolio, $passport, $releves, $attestation, $photo, $code;
    public function render()
    {
        return view('livewire.formulaire-admission');
    }



    public function save()
    {
        $this->validate([
            'formulaire' => 'required|file|mimes:pdf|max:2048',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'lettre' => 'required|file|mimes:pdf|max:2048',
            'portfolio' => 'required|file|mimes:pdf|max:2048',
            'passport' => 'required|file|mimes:pdf|max:2048',
            'releves' => 'required|file|mimes:pdf|max:2048',
            'attestation' => 'required|file|mimes:pdf|max:2048',
            'photo' => 'required|image|max:1024',
            'code' => 'required|exists:users,code',
        ]);

        try {
            $user = User::where("code", $this->code)->firstOrFail();
        } catch (\Exception $e) {
            $this->addError('code', 'Code étudiant invalide.');
            return;
        }

        $dossier = new dossiers();
        $dossier->id_user = $user->id;

        $dossier->formulaire = $this->formulaire->store('public/documents');
        $dossier->cv = $this->cv->store('public/documents');
        $dossier->lettre = $this->lettre->store('public/documents');
        $dossier->portfolio = $this->portfolio->store('public/documents');
        $dossier->passport = $this->passport->store('public/documents');
        $dossier->releves = $this->releves->store('public/documents');
        $dossier->attestation = $this->attestation->store('public/documents');
        $dossier->photo = $this->photo->store('public/documents');
        $dossier->decission = "dossier envoyé";
        $dossier->titre = "Demande d'admission";

        $dossier->save();

        session()->flash("success", "Dossier enregistré avec succès.");
        $this->reset();
    }

}
