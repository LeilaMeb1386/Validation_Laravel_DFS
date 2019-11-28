<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $races = Race::All();
      return view('races.show', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('races.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $race= new Race([
        'name' => $request->name,
        'classification' => $request->classification,
        'esperence_vie' => $request->esperence_vie,

      ]);

      $race->save();

      return redirect('races')->with('status', 'Ajout avec succées!');
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
      $race = Race::find($id);

      return view('races.edit', compact('race'));
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
      $race = Race::find($request->id);
      $race->name = $request->name;
      $race->classification = $request->classification;
      $race->esperence_vie = $request->esperence_vie;

      $race->save();
       return redirect('races');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $race = Race::find($request->id);
      $race->delete();
      return redirect('races')->with('status', 'suppression éfféctuée avec succées!');
    }
}
