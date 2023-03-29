<?php

namespace Database\Seeders;

use App\Models\Camion;
use Illuminate\Database\Seeder;

class CamionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camion=new Camion();
        $camion-> id= '78645';
        $camion-> placa_camion= 'Izabal';
        $camion-> marca='Bandegua';
        $camion->color='Blanco';
        $camion->modelo='Lampa';
        $camion->capacidad_toneladas='25';
        $camion-> transporte_id='1234567';
        $camion -> save();
    }
}
