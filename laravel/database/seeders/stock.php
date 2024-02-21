<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stock extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('stocks')->truncate();
        DB::table('stocks')->insert([
            'codigo' => 'B001',
            'fecha_ingreso' => '2023-12-12',
            'estado' => '1',
            'book_id' => 1,
            'row_id' => 1
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B002',
            'fecha_ingreso' => '2020-07-12',
            'estado' => '2',
            'book_id' => 1,
            'row_id' => 1
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B003',
            'fecha_ingreso' => '2021-10-03',
            'estado' => '1',
            'book_id' => 2,
            'row_id' => 1
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B004',
            'fecha_ingreso' => '2023-02-16',
            'estado' => '1',
            'book_id' => 3,
            'row_id' => 1
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B005',
            'fecha_ingreso' => '2022-06-22',
            'estado' => '1',
            'book_id' => 3,
            'row_id' => 1
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B006',
            'fecha_ingreso' => '2022-11-02',
            'estado' => '1',
            'book_id' => 4,
            'row_id' => 2
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B007',
            'fecha_ingreso' => '2023-03-10',
            'estado' => '1',
            'book_id' => 5,
            'row_id' => 2
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B008',
            'fecha_ingreso' => '2022-05-15',
            'estado' => '1',
            'book_id' => 6,
            'row_id' => 2
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B009',
            'fecha_ingreso' => '2019-12-24',
            'estado' => '2',
            'book_id' => 7,
            'row_id' => 2
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B010',
            'fecha_ingreso' => '2020-03-09',
            'estado' => '2',
            'book_id' => 7,
            'row_id' => 2
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B011',
            'fecha_ingreso' => '2020-01-09',
            'estado' => '2',
            'book_id' => 8,
            'row_id' => 3
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B012',
            'fecha_ingreso' => '2021-11-08',
            'estado' => '1',
            'book_id' => 8,
            'row_id' => 3
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B013',
            'fecha_ingreso' => '2021-08-09',
            'estado' => '1',
            'book_id' => 9,
            'row_id' => 3
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B014',
            'fecha_ingreso' => '2022-10-12',
            'estado' => '1',
            'book_id' => 10,
            'row_id' => 4
        ]);
        DB::table('stocks')->insert([
            'codigo' => 'B015',
            'fecha_ingreso' => '2022-10-12',
            'estado' => '1',
            'book_id' => 10,
            'row_id' => 4
        ]);
    }
}
