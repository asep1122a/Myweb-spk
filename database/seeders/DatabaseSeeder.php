<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
           // Panggil seeder kriteria yang sudah kita buat
        $this->call([
            KriteriaSeeder::class,
        ]);

        User::create([
        'name' => 'Septiyan Adam Maulana',
        'email' => 'septiyanadam1@gmail.com',
        'password' => bcrypt('123'),
        ]);
    }
}
