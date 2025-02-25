<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitesettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sitesettings')->insert([
            'slug' => 'website-name',
            'meta_key' => 'Website Name',
            'meta_value' => 'Plant House',
            'group' => 'General Setting',
            'type' => 'Text',
            'position' => 2
        ]);
    }
}
