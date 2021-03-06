<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SpecialisationRequest;
use App\Specialisation;
use App\Parcour;
use App\Departement;

class SpecialisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialisations = Specialisation::get();
        return view('specialisation.index',compact('specialisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parcours = Parcour::orderBy('id')->pluck('cycle','id');
        $departements = Departement::orderBy('id')->pluck('code','id');
        return view('specialisation.create',compact('parcours','departements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecialisationRequest $request)
    {
        $specialisation = Specialisation::create($request->all());
        return redirect(route('specialisation.index'));
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
        $specialisation = Specialisation::findOrFail($id);
        return view('specialisation.edit',compact('specialisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpecialisationRequest $request, $id)
    {
        $specialisation = Specialisation::findOrFail($id);
        $specialisation->update($request->all());
        return redirect(route('specialisation.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialisation = Specialisation::findOrFail($id)->delete();
        return redirect(route('specialisation.index'));
    }
}
