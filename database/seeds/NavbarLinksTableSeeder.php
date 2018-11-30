<?php

use Illuminate\Database\Seeder;

class NavbarLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbar_links')->insert([
            'content' => 'home',
        ]);
        DB::table('navbar_links')->insert([
            'content' => 'about',
        ]);
        DB::table('navbar_links')->insert([
            'content' => 'service',
        ]);
        DB::table('navbar_links')->insert([
            'content' => 'work',
        ]);
        DB::table('navbar_links')->insert([
            'content' => 'contact',
        ]);
    }
}
