<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            NavbarLinksTableSeeder::class,
            NavbarTitlesTableSeeder::class,
            HomeIconsTableSeeder::class,
            HomeImgsTableSeeder::class,
            AboutsTableSeeder::class,
            ServiceTitlesTableSeeder::class,
            ServiceItemsTableSeeder::class,
            ServiceIconsTableSeeder::class,
        ]);
    }
}
