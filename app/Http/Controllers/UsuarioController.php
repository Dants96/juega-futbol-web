<?php

namespace JuegaFutbol\Http\Controllers;

use Illuminate\Http\Request;
use JuegaFutbol\Usuario;
use JuegaFutbol\Http\Requests\UsuarioStoreRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioStoreRequest $request)
    {
       
        $user = new Usuario();
        $user->id = $request->input('cedula');
        $user->nom_cli = $request->input('user');
        $user->email_cli = $request->input('email');
        $user->tel_cli = $request->input('phone');
        $user->password = bcrypt( $request->input('password'));
        $user->save();
        echo '<script language="javascript">alert("El usuario ';
        echo $request->input('user');
        echo ' ha sido registrado, porfavor inicie secion");</script>';
        return view('index'); 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
