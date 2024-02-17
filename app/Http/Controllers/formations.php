<?php

namespace App\Http\Controllers;

use App\Models\formations as ModelsFormations;
use Illuminate\Http\Request;

class formations extends Controller
{
    public function index_home($type_formation)
    {
        $types = ["academique", "professionnelle"];
        //verifeir que le type est dans la liste des types
        if (!in_array($type_formation, $types))  return abort(404);

        $formations = ModelsFormations::where('type', $type_formation)
            ->get();
        return view("front.formation")
            ->with("formations", $formations)
            ->with("type_formation", $type_formation);
    }

    public function index_admin()
    {
        return view("admin.formation");
    }


    public function index_details($id, $titre)
    {
        $formation = ModelsFormations::find($id);
        return view("front.details")->with("formation", $formation);
    }


    public function admission_admin()
    {
        return view("admin.admission");
    }

    public function televerser_admin(){
        return view("admin.televerser-admin");
    }

    public function telechargement(){
        return view("admin.telechargements");
    }
}
