<?php

namespace App\Http\Controllers;

use App\reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    

        $schedules =  DB::table('reservas')->where('usuario', '=','1085312229')->get();
     //   ->whereDate('fecha_res', '=', Carbon::now()->format('Y-m-d'))->get();
        return view('bookings', compact('schedules'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newbookings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(reserva $reserva)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(reserva $reserva)
    {
        //
    }
}
