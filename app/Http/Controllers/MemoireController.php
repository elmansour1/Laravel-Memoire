<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemoireRequest;

use Illuminate\Support\Facades\Storage;

use App\Memoire;
use App\Parcour;
use App\Enseignant;

class MemoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memoires = Memoire::get();
        //$par = $memoires->parcour()->get();
        return view('memoire.index', compact('memoires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$memoires = Memoire::get();
        $parcours = Parcour::orderBy('id')->pluck('cycle','id');
        $enseignants = Enseignant::orderBy('nom','ASC')->pluck('nom','id');
       return view('memoire.create', compact('parcours','enseignants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemoireRequest $request)
    {
        $memoire = Memoire::create($request->all());

        if($request->file('document')){
            $path = Storage::disk('public')->put('document',$request->file('document'));
            $memoire->fill(['document',asset($path)])->save();
        }

        $memoire->parcour()->associate($request->get('parcours'));
        $memoire->enseignants()->attach($request->get('enseignants'));

        return redirect(route('memoire.index'));

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
        $memoire = Memoire::findOrFail($id);
        return view('memoire.edit',compact('memoire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemoireRequest $request, $id)
    {
       $memoire = Memoire::findOrFail($id);
       $memoire->update($request->all());
       $memoire->parcour()->associate($request->get('parcours'));
       $memoire->enseignants()->sync($request->get('enseignants'));
       return redirect(route('memoire.index',compact('enseignants','parcours')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memoire = Memoire::findOrFail($id)->delete();
        return redirect(route('memoire.index'));
    }
}
