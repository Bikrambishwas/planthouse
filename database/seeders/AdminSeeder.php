<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Bikram Bishwas',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'address' => 'Biratnagar',
            'phone' => '123456789',
            'token' => Hash::make('123456')
        ]);
    }
}
