<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Http\Requests\AuthorRequest;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs = Author::get();
        //$auteurs
       return view('auteur.index', compact('auteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auteur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        $auteur = Author::create($request->all());
        //$this->authorize('pass', $auteur);
        Session::flash('success','The author has been create');
        return redirect(route('author.index'));
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
        $auteur = Author::findOrFail($id);
        return view('auteur.edit',compact('auteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request, $id)
    {
        // dd($request->all());
         $auteur = Author::findOrFail($id);
         $auteur->update($request->all());
         Session::flash('info','The author has been update');
         return redirect(route('author.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auteur = Author::findOrFail($id);
        $auteur->delete();
       // $this->authorize('pass',$auteur);
        //Session::flash('danger','The author has been delete');
        return back()->with('danger','Supprimer avec Succees');
    }
}
