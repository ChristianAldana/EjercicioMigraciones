<?php

namespace Database\Seeders;

use App\Models\Transporte;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        $transporte = new Transporte(); //objeto y y atributos de la clase.
        $transporte->id='1234567';
        $transporte->nombre='Bandegua';
        $transporte->razon_social='BC';
        $transporte->save();

        $this->call(CamionSeeder::class);



    }
}
