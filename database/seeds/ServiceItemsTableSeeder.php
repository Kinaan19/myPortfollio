<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_items')->insert([
            'icon' => 'fa-building',
            'unicode' => '&#xf1ad',
            'title' => 'branding identity',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, veniam commodi adipisci ex facilis iste blanditiis alias quo voluptatibus molestiae!',
            'state' => '0',
        ]);
        DB::table('service_items')->insert([
            'icon' => 'fa-keyboard',
            'unicode' => '&#xf11c',
            'title' => 'branding identity',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, veniam commodi adipisci ex facilis iste blanditiis alias quo voluptatibus molestiae!',
            'state' => '0',
        ]);
        DB::table('service_items')->insert([
            'icon' => 'fa-paper-plane',
            'unicode' => '&#xf1d8',
            'title' => 'branding identity',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, veniam commodi adipisci ex facilis iste blanditiis alias quo voluptatibus molestiae!',
            'state' => '0',
        ]);
        DB::table('service_items')->insert([
            'icon' => 'fa-deaf',
            'unicode' => '&#xf2a4',
            'title' => 'branding identity',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, veniam commodi adipisci ex facilis iste blanditiis alias quo voluptatibus molestiae!',
            'state' => '0',
        ]);
    }
}
