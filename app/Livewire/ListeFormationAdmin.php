<?php

namespace App\Livewire;

use App\Models\formations;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ListeFormationAdmin extends Component
{
    public $formations;
    public $listeners = ['refreshComponent'];

    public function refreshComponent()
    {
        $this->formations = formations::Orderby("id","Desc")->get();
    }

    public function render()
    {
        $this->formations = formations::Orderby("id","Desc")->get();
        return view('livewire.liste-formation-admin');
    }

    public function delete($id)
    {
        $formation = formations::find($id);
        if ($formation) {
            //delete  couverture en document
            Storage::delete($formation->document);
            Storage::delete($formation->couverture);
            $formation->delete();
            session()->flash("success", "La formation a été supprimé avec succès");
        } else {
            session()->flash("error", "Une erreur est survenue, veillez réessayer plus tard.");
        }
    }
}
