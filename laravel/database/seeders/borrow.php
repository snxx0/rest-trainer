<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class borrow extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('borrows')->truncate();
        DB::table('borrows')->insert([
            'pedido' => '2023-10-15',
            'entregado' => '2023-12-20',
            'estado' => 2,
            'user_id' => 2,
            'stock_id' => 1
        ]);
        DB::table('borrows')->insert([
            'pedido' => '2023-11-25',
            'entregado' => null,
            'estado' => 3,
            'user_id' => 5,
            'stock_id' => 3
        ]);
        DB::table('borrows')->insert([
            'pedido' => '2023-12-08',
            'entregado' => null,
            'estado' => 0,
            'user_id' => 4,
            'stock_id' => 14
        ]);
    }
}
