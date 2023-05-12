<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::orderByDesc('id')->get();
        return view('Tarea.index',compact('tareas'));
    }

    public function asis()
    {
        
        return view('Tarea.asis');
    }

    public function inndextarea()
    {
        return view('Tarea.inndextarea');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tarea.create');
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TareaRequest $request)
    {
        $datos = $request->validated();
        $tarea = Tarea::create($datos);
        return redirect()->route('Tarea.index');    
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        return view('Tarea.show',['tarea'=>$tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
        return view('Tarea.edit',compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TareaRequest $request, Tarea $tarea)
    {
        $datos = $request->validated();
        $tarea -> update($datos);
        return redirect()->route('Tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea -> delete();
        return redirect()->route('Tarea.index');
    }
}
