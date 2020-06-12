<?php

namespace App\Http\Controllers;

use App\cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canchas = cancha::all();
        
        return view('canchas', [
            'canchas' => $canchas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        canchas::create([


        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function show(cancha $cancha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function edit(cancha $cancha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cancha $cancha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function destroy(cancha $cancha)
    {
        //
    }
}
