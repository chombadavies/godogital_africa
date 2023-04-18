<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([[
            'title'=>'Godigital Africa',
            'meta_description'=>'digital marketing, website developers,system developers',
            'meta_keywords'=>'digital marketing, website developers,system developers',
            'logo'=>'frontend/img/logo.jpeg',
            'favicon'=>'frontend/img/logo.jpeg',
            'address'=>'54-00100',
            'phone'=>'+254 700222249',
            'email'=>'info@godigitalafrica.com',
            'footer'=>'Godigital Africa',
            'facebook_url'=>'https://www.facebook.com/AfricaGoDigital',
            'twitter_url'=>'https://twitter.com/AfricaGdigital?t=aUD2lwAX16Sj97SCg0BIEA&s=09',
            'youtube_url'=>'https://www.youtube.com/watch?v=V_TB8RUoYaQ',
            'instagram_url'=>'https://www.instagram.com/godigitalafrica1/?__coig_restricted=1',
        ]]);
        }
}
