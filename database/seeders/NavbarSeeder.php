<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbar')->insert([
            ['navtitle' => 'Home', 'section' => 'home'],
            ['navtitle' => 'About', 'section' => 'about'],
            ['navtitle' => 'Portfolio', 'section' => 'projects'],
            ['navtitle' => 'Contact', 'section' => 'contact'],
        ]);
    }
}
