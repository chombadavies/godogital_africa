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
            'title'=>'Omar Opticians',
            'meta_description'=>'online opticians online shopping',
            'meta_keywords'=>'online opticoans online shopping',
            'logo'=>'images/cropped-hadiyed-2.webp',
            'favicon'=>'images/cropped-hadiyed-2.webp',
            'address'=>'54-10230',
            'phone'=>'0743666736',
            'email'=>'omaropticians@info.com',
            'footer'=>'Omar Opticians',
            'facebook_url'=>'https://www.facebook.com/Hadiyedshop',
            'twitter_url'=>'',
            'youtube_url'=>'https://www.youtube.com/watch?v=V_TB8RUoYaQ',
            'instagram_url'=>'',
        ]]);
        }
}
