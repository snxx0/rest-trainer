<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class racks extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('racks')->insert([
            'etiqueta' => 'STD001',
            'niveles' => 2,
            'ancho' => 50,
        ]);
        DB::table('racks')->insert([
            'etiqueta' => 'STD002',
            'niveles' => 2,
            'ancho' => 45,
        ]);
        DB::table('rows')->insert([
            'etiqueta' => 'R001S1',
            'rack_id' => 1,
        ]);
        DB::table('rows')->insert([
            'etiqueta' => 'R001S2',
            'rack_id' => 1,
        ]);
        DB::table('rows')->insert([
            'etiqueta' => 'R002S1',
            'rack_id' => 2,
        ]);
        DB::table('rows')->insert([
            'etiqueta' => 'R002S2',
            'rack_id' => 2,
        ]);
    }
}
