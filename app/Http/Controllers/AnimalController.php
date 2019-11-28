<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $animals = Animal::All();
      return view('animals.show', compact('animals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $races = Race::All();
      return view('animals.create', compact('races'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $animal = new Animal([
        'name' => $request->name,
        'description' => $request->description,
        'sexe' => $request->sexe,
        'poids' => $request->poids,
        'taille' => $request->taille,
        'race_id' => $request->race
      ]);

      $animal->save();


      $races = Race::All();


      return redirect('animals')->with('status', 'Ajout avec succées!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $animal = Animal::find($id);
      $races = Race::All();
      return view('animals.edit', compact('animal', 'races'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $animal = Animal::find($request->id);
      $animal->name = $request->name;
      $animal->description = $request->description;
      $animal->sexe = $request->sexe;
      $animal->poids = $request->poids;
      $animal->taille = $request->taille;
      $animal->race_id = $request->race;
      $animal->save();
       return redirect('animals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {

        $animal = Animal::find($request->id);
        $animal->delete();
        return redirect('animals')->with('status', 'suppression éfféctuée avec succées!');

    }
}
