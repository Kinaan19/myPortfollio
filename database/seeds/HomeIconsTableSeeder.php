<?php

use Illuminate\Database\Seeder;

class HomeIconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_icons')->insert([
            'class' => 'fab fa-facebook-f',
            'link' => '#',
        ]);
        DB::table('home_icons')->insert([
            'class' => 'fab fa-twitter',
            'link' => '#',
        ]);
        DB::table('home_icons')->insert([
            'class' => 'fab fa-google-plus-g',
            'link' => '#',
        ]);
        DB::table('home_icons')->insert([
            'class' => 'fab fa-dribbble',
            'link' => '#',
        ]);
        DB::table('home_icons')->insert([
            'class' => 'fab fa-instagram',
            'link' => '#',
        ]);
    }
}
