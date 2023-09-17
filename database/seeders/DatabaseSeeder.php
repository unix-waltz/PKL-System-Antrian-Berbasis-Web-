<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Asset;
use App\Models\typeA;
use App\Models\typeB;
use App\Models\typeC;
use App\Models\typeD;
use App\Models\typeE;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Asset::create([
           "main_title" => "BBPPMPV BMTI",
           "favicon" => "icon.jpg",
        ]);
        User::create([
            'name' => 'TestMan',
            'email' => 'TestMan12121212@gmail.com',
            "password" => bcrypt("TestMan12121212"),
            "role" => "Admin",
        ]);


        User::create([
            'name' => 'Super Admin',
            'email' => 'riosraskaa@gmail.com',
            "password" => bcrypt("RioPutra1210"),
            "role" => "SuperAdmin",
        ]);
typeA::create([
    "nomor_antrian" => 1,
    "type" => "A",
    "status" => "Dalam Antrian",
]);
typeB::create([
    "nomor_antrian" => 1,
    "type" => "B",
    "status" => "Dalam Antrian",
]);
typeD::create([
    "nomor_antrian" => 1,
    "type" => "D",
    "status" => "Dalam Antrian",
]);
typeC::create([
    "nomor_antrian" => 1,
    "type" => "C",
    "status" => "Dalam Antrian",
]);
typeE::create([
    "nomor_antrian" => 1,
    "type" => "E",
    "status" => "Dalam Antrian",
]);
typeA::create([
    "nomor_antrian" => 2,
    "type" => "A",
    "status" => "Dalam Antrian",
]);
typeB::create([
    "nomor_antrian" => 2,
    "type" => "B",
    "status" => "Dalam Antrian",
]);
typeD::create([
    "nomor_antrian" => 2,
    "type" => "D",
    "status" => "Dalam Antrian",
]);
typeC::create([
    "nomor_antrian" => 2,
    "type" => "C",
    "status" => "Dalam Antrian",
]);
typeE::create([
    "nomor_antrian" => 2,
    "type" => "E",
    "status" => "Dalam Antrian",
]);
typeA::create([
    "nomor_antrian" => 3,
    "type" => "A",
    "status" => "Dalam Antrian",
]);
typeB::create([
    "nomor_antrian" => 3,
    "type" => "B",
    "status" => "Dalam Antrian",
]);
typeD::create([
    "nomor_antrian" => 3,
    "type" => "D",
    "status" => "Dalam Antrian",
]);
typeC::create([
    "nomor_antrian" => 3,
    "type" => "C",
    "status" => "Dalam Antrian",
]);
typeE::create([
    "nomor_antrian" => 3,
    "type" => "E",
    "status" => "Dalam Antrian",
]);
typeA::create([
    "nomor_antrian" => 4,
    "type" => "A",
    "status" => "Dalam Antrian",
]);
typeB::create([
    "nomor_antrian" => 4,
    "type" => "B",
    "status" => "Dalam Antrian",
]);
typeD::create([
    "nomor_antrian" => 4,
    "type" => "D",
    "status" => "Dalam Antrian",
]);
typeC::create([
    "nomor_antrian" => 4,
    "type" => "C",
    "status" => "Dalam Antrian",
]);
typeE::create([
    "nomor_antrian" => 4,
    "type" => "E",
    "status" => "Dalam Antrian",
]);
typeA::create([
    "nomor_antrian" => 5,
    "type" => "A",
    "status" => "Dalam Antrian",
]);
typeB::create([
    "nomor_antrian" => 5,
    "type" => "B",
    "status" => "Dalam Antrian",
]);
typeD::create([
    "nomor_antrian" => 5,
    "type" => "D",
    "status" => "Dalam Antrian",
]);
typeC::create([
    "nomor_antrian" => 5,
    "type" => "C",
    "status" => "Dalam Antrian",
]);
typeE::create([
    "nomor_antrian" => 5,
    "type" => "E",
    "status" => "Dalam Antrian",
]);
    }
}
