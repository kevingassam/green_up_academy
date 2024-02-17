<?php

namespace App\Livewire;

use App\Models\formations;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormCreateFormation extends Component
{
    use WithFileUploads;
    public $type, $titre, $reference, $document, $description, $condition, $couverture;

    public function render()
    {
        return view('livewire.form-create-formation');
    }

    protected $rules = [
        'titre' => 'required|string',
        'reference' => 'required|string',
        'description' => 'required|string',
        'condition' => 'required|string',
        'type' => 'required|string',
        'document' => 'required|file|mimes:pdf|max:2048',
        'couverture' => 'required|image|max:1024',
    ];


    public function save()
    {
        $this->validate();

        $documentPath = $this->document->store('public/documents');
        $couverturePath = $this->couverture->store('public/couvertures');

        $formation = new formations();
        $formation->titre = $this->titre;
        $formation->reference = $this->reference;
        $formation->conditions = $this->condition;
        $formation->description = $this->description;
        $formation->type = $this->type;
        $formation->document =  $documentPath;
        $formation->couverture = $couverturePath;
        $formation->save();
        session()->flash("success", "La formation a été ajoutée avec succès");

        $this->reset(['titre', 'reference', 'description', 'condition', 'type', 'document', 'couverture']);
        $this->dispatch('refreshComponent');
    }
}
