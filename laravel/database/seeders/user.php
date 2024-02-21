<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        File::lines(base_path() . '/users.txt')->each(function ($line) {
            $parts = explode(":*:", $line);
            DB::table('users')->insert([
                'name' => $parts[0],
                'email' => implode(".", explode(" ", $parts[0])) . "@noexist.test",
                'email_verified_at' => '2022-12-31',
                'password' => bcrypt($parts[1]),
                'created_at' => '2022-12-31',
                'updated_at' => '2022-12-31'
            ]);
        });
    }
}
