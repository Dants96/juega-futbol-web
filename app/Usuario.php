<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $remember_token = false;
    protected $fillable = ['id', 'nom_cli', 'password', 'tel_cli', 'email_cli',];
    protected $guarded = ['id'];

}
