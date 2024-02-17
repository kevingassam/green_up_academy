<?php

namespace App\Livewire;

use App\Models\televerssements;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Telechargements extends Component
{
    public $telechargements,$date;

    public function render()
    {
        $this->telechargements = $this->gettelechargements();
        return view('livewire.telechargements');
    }


    public function filtre()
    {
        $this->telechargements = $this->gettelechargements();
    }

    private function gettelechargements()
    {
        $query = televerssements::query();

        if ($this->date) {
            $query->whereDate('created_at', $this->date);
        }

        return $query->get();
    }
}
