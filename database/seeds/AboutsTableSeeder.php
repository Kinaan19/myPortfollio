<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'aboutTitle' => 'About me',
            'contentTitle' => "I'M 22 YEARS OLD DESIGNER AND FOCUSED ON BRAND IDENTITY",
            'contentText' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni illum corporis, impedit itaque excepturi qui soluta totam! Animi eligendi voluptatum optio quod nobis eos commodi dignissimos quaerat nam velit! Aspernatur accusamus deserunt vitae corporis, magni praesentium dicta ad voluptas perferendis earum incidunt repellat eius vero vel omnis esse facere debitis?",
        ]);
    }
}
