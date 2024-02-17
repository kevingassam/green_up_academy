<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dossiers extends Model
{
    use HasFactory;


    //recuperer les information de l'utilisateur qui a ce dossier
    public function user_info() {
        return $this->belongsTo(User::class,"id_user","id");
    }
}
