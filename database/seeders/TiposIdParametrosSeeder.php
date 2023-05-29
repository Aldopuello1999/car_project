<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TiposIdParametrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('parameters')->insert([
        //     'parameter' => 'Tipo Identificacion',
        //     'observation' => 'Tipo Identificacion',
        //     'state_parameters' => '1',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'state' => 1
        // ]);

        // DB::table('parameter_values')->insert([
        //     'nombre' => 'Cedula',
        //     'parameters_id' => '1',
        //     'value' => 'Cedula',
        //     'state_parameter_value' => '1',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'state' => 1
        // ]);

        // DB::table('parameter_values')->insert([
        //     'nombre' => 'Tarjeta de identidad',
        //     'parameters_id' => '1',
        //     'value' => 'TI',
        //     'state_parameter_value' => '1',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'state' => 1
        // ]);

    }
}
