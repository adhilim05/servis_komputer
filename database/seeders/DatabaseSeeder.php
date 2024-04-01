<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\admin::create([
            'nama_admin' => 'Test Alim',  
            'email' => 'adhilim02@gmail.com',
            'kata_sandi_admin' => Hash::make ('12345')
            
        ]);
    }
}
