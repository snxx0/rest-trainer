<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\user;
use Database\Seeders\autor;
use Database\Seeders\book;
use Database\Seeders\racks;
use Database\Seeders\stock;
use Database\Seeders\borrow;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(user::class);
        $this->call(autor::class);
        $this->call(book::class);
        $this->call(racks::class);
        $this->call(stock::class);
        $this->call(borrow::class);
    }
}
