<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanchasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canchas', function (Blueprint $table) {
            $table -> string('id');
            $table -> string('nom_pro');
            $table -> string('id_loc') ;
            $table -> string('nom_loc');
            $table -> string('id_cancha'); //llave de la clase
            $table -> string('num_jug'); 
            $table -> string('techo'); 
            $table -> string('telefono');
            $table -> string('img_url');
            $table -> string('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canchas');
    }
}
