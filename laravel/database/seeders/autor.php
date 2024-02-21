<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class autor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('autors')->truncate();
        DB::table('autors')->insert([
            'nombre' => 'Gabriel García Márquez',
            'nacimiento' => '1927-03-06',
            'origen' => 'Colombia',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'J. R. R. Tolkien',
            'nacimiento' => '1892-01-03',
            'origen' => 'Sudafrica',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'George Orwell',
            'nacimiento' => '1903-06-25',
            'origen' => 'Bengala',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'Aldous Huxley',
            'nacimiento' => '1894-07-26',
            'origen' => 'Inglaterra',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'Jane Austen',
            'nacimiento' => '1775-12-16',
            'origen' => 'Inglaterra',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'Fiódor Dostoyevski',
            'nacimiento' => '1821-10-30',
            'origen' => 'Rusia',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'Vladimir Nabokov',
            'nacimiento' => '1899-04-22',
            'origen' => 'Rusia',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'James Joyce',
            'nacimiento' => '1882-02-02',
            'origen' => 'Irlanda',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'Gustave Flaubert',
            'nacimiento' => '1821-12-12',
            'origen' => 'Francia',
        ]);
        DB::table('autors')->insert([
            'nombre' => 'Marcel Proust',
            'nacimiento' => '1871-07-10',
            'origen' => 'Francia',
        ]);
    }
}
