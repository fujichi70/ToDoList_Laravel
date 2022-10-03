<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolists = Todolist::all();
        
        return view('Todolists.index', [
            'todolists' => $todolists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $todolist = new Todolist;
        
        return view('Todolists.create', [
            'todolist' => $todolist 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ]);

        
        $todolist = new Todolist;
        $todolist->title = $request->title;
        $todolist->content = $request->content;
        $todolist->save();

        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todolist = Todolist::findOrFail($id);

        
        return view('Todolists.show', [
            'todolist' => $todolist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todolist = Todolist::findOrFail($id);

        
        return view('Todolists.edit', [
            'todolist' => $todolist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ]);

        
        $todolist = Todolist::findOrFail($id);
        
        $todolist->title = $request->title;
        $todolist->content = $request->content;
        $todolist->save();

        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todolist = Todolist::findOrFail($id);
        
        $todolist->delete();

        
        return redirect('/');
    }
}
