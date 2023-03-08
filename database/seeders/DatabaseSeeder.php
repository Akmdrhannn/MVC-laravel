<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\mhs;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raihan',
            'email' => 'akh.raihanaf@gmail',
            'password' => 'akmdrhan'
        ]);
        User::create([
            'name' => 'Naufal',
            'email' => 'narz@gmail',
            'password' => 'fal'
        ]);


        mhs::create([
            'NIM' => '200411100095',
            'Nama' => 'Akhmad Raihan Aulia Fikri',
            'TTL' => '2002-05-28',
            'alamat' => 'Jl Hos  Cokroaminoto no 79'
        ]);
        mhs::create([
            'NIM' => '200411100096',
            'Nama' => 'Naufal Abdullah R.Z',
            'TTL' => '2001-08-15',
            'alamat' => 'Jl dimana saja pondok halim 2'
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
