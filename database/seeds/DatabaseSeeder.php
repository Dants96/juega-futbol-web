<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         App\Usuario::create([
	        'id' => '1085312229', 
	        'nom_cli' => 'Freddie Mercury',       
	        'email_cli' => 'f@f.com',
	        'tel_cli' => '3122683418',
	        'password' => bcrypt("123")
        ]);
         App\reserva::create([
	        'usuario' => '1085312229', 
            'id_res' =>  '0001',
            'cancha' => '0001',
            'fecha_res'=>'2020-12-5',
            'hora_res'=>now()
        ]);
        App\reserva::create([
	        'usuario' => '1085312229', 
            'id_res' =>  '0002',
            'cancha' => '0001',
            'fecha_res'=>'2020-6-19',
            'hora_res'=>now()
        ]);
                


    }
}
