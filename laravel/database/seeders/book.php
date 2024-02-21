<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('books')->truncate();
        DB::table('books')->insert([
            'nombre' => 'Cien años de soledad',
            'publicacion' => '1967-06-05',
            'editorial' => 'Editorial Sudamericana',
            'isdn' => '',
            'autor_id' => 1
        ]);
        DB::table('books')->insert([
            'nombre' => 'El señor de los anillos ',
            'publicacion' => '1954-01-01',
            'editorial' => 'George Allen & Unwin HarperCollins',
            'isdn' => '',
            'autor_id' => 2
        ]);
        DB::table('books')->insert([
            'nombre' => '1984',
            'publicacion' => '1949-06-08',
            'editorial' => 'xxx',
            'isdn' => '',
            'autor_id' => 3
        ]);
        DB::table('books')->insert([
            'nombre' => 'Un mundo feliz',
            'publicacion' => '1932-01-01',
            'editorial' => 'Chatto & Windus',
            'isdn' => '',
            'autor_id' => 4
        ]);
        DB::table('books')->insert([
            'nombre' => 'Orgullo y prejuicio',
            'publicacion' => '1813-01-28',
            'editorial' => 'xxx',
            'isdn' => '',
            'autor_id' => 5
        ]);
        DB::table('books')->insert([
            'nombre' => 'Crimen y castigo',
            'publicacion' => '1866-01-01',
            'editorial' => 'xxx',
            'isdn' => '',
            'autor_id' => 6
        ]);
        DB::table('books')->insert([
            'nombre' => 'Lolita',
            'publicacion' => '1955-01-01',
            'editorial' => 'Olympia Press',
            'isdn' => '',
            'autor_id' => 7
        ]);
        DB::table('books')->insert([
            'nombre' => 'Ulises',
            'publicacion' => '1922-02-02',
            'editorial' => 'Shakespeare and company',
            'isdn' => '',
            'autor_id' => 8
        ]);
        DB::table('books')->insert([
            'nombre' => 'Madame Bovary',
            'publicacion' => '1857-01-01',
            'editorial' => 'La Revue de Paris',
            'isdn' => '',
            'autor_id' => 9
        ]);
        DB::table('books')->insert([
            'nombre' => 'En busca del tiempo perdido',
            'publicacion' => '1913-01-01',
            'editorial' => 'Éditions Grasset',
            'isdn' => '',
            'autor_id' => 10
        ]);
    }
}
