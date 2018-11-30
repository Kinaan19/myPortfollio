<?php

use Illuminate\Database\Seeder;

class ServiceIconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_icons')->insert([
            'class' => 'fa-glass',
            'unicode' => '&#xf000',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-envelope-open',
            'unicode' => '&#xf2b6',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-align-right',
            'unicode' => '&#xf038',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-beer',
            'unicode' => '&#xf0fc',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-credit-card',
            'unicode' => '&#xf09d',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-leaf',
            'unicode' => '&#xf06c',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-building',
            'unicode' => '&#xf1ad',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-keyboard-o',
            'unicode' => '&#xf11c',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-paper-plane',
            'unicode' => '&#xf1d8',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-deaf',
            'unicode' => '&#xf2a4',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-flask',
            'unicode' => '&#xf0c3',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-handshake-o',
            'unicode' => '&#xf2b5',
        ]);
        DB::table('service_icons')->insert([
            'class' => 'fa-star',
            'unicode' => '&#xf005',
        ]);
    }
}
