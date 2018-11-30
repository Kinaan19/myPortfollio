<?php

use Illuminate\Database\Seeder;

class NavbarTitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbar_titles')->insert([
            'content' => 'Monster',
        ]);
    }
}
