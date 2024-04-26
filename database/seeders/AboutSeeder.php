<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = [
            [
            'judulindo' =>'Aplikasi Resep Makanan',
            'juduleng' =>'Aplikasi Resep Makanan',
            'deskripsiindo'=>'aplikasi ini berisikan sebuah resep makanan yang di gunakan untuk orang sakit',
            'deskripsieng'=>'This application contains a food recipe that is used for sick people',
            'kelebihanindo'=>'kelebihan aplikasi 1awdkawd',
            'kelebihaneng'=>'kelebihan engawdawd',
            'image'=>'slide.jpg'
        ],
    ];
    foreach ($about as $key => $value) {
        About::create($value);
    }
    }
}
