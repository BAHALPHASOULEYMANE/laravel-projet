<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    //
    public function create()
    {
        return view('projet.create');
    }
    public function store(Request $request)
    {
        $projet = new Projet();

        $projet->nom = $request->nom;
        $projet->description = $request->description;
        $projet->datebebut = $request->datebebut;
        $projet->datefin = $request->datefin;

        $result= $projet->save();//1 ou 0
        return view('projet.create',['confirmation' => $result]); 
    }
    public function index()
    {
        $projetslistes = Projet::all() ;
        return view('projet.index', compact('projetslistes')); 
    }
    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projet.show', compact('projet'));
    }


}
