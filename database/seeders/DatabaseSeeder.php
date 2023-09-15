<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\Selesai MengantriithoutModelEvents;
use App\Models\User;
use App\Models\Penguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       


        \App\Models\superadmin::create([
            'name' => 'Super Admin',
            'email' => 'riosraskaa@gmail.com',
            "password" => bcrypt("RioPutra1210"),
        ]);
    }
}
