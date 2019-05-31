<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiplomeRequest;
use App\Diplome;
use App\Parcour;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diplomes = Diplome::get();
        return view('diplome.index',compact('diplomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parcours = Parcour::orderBy('id')->pluck('cycle','id');
        return view('diplome.create',compact('parcours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiplomeRequest $request)
    {
        $diplome = Diplome::create($request->all());
        return redirect(route('diplome.index'));
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
        $diplome = Diplome::findOrFail($id);
        return view('diplome.edit',compact('diplome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiplomeRequest $request, $id)
    {
       $diplome = Diplome::findOrFail($id);
       $diplome->update($request->all());
       return redirect(route('diplome.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diplome = Diplome::findOrFail($id)->delete();
        return redirect(route('diplome.index'));
    }
}
