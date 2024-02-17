<?php

namespace App\Livewire;

use App\Models\dossiers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ListeAdmissions extends Component
{
    public $admissions, $key, $date;

    public function render()
    {
        $this->admissions = $this->getAdmissions();
        return view('livewire.liste-admissions');
    }

    public function filtre()
    {
        $this->admissions = $this->getAdmissions();
    }

    private function getAdmissions()
    {
        $query = Dossiers::query()
            ->orderByDesc('dossiers.id')
            ->leftJoin('users', 'dossiers.id_user', '=', 'users.id');

        if ($this->date) {
            $query->whereDate('dossiers.created_at', $this->date);
        }
        if ($this->key) {
            $query->where(function ($q) {
                $q->where('users.name', 'like', '%' . $this->key . '%')
                    ->orWhere('users.prenom', 'like', '%' . $this->key . '%')
                    ->orWhere('users.email', 'like', '%' . $this->key . '%');
            });
        }

        return $query->get();
    }
}
