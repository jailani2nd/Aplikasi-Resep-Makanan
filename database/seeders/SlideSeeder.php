<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slide = [
            [
            'judulindo' =>'Aplikasi Resep Makanan',
            'juduleng' =>'Aplikasi Resep Makanan',
            'deskripsiindo'=>'aplikasi ini berisikan sebuah resep makanan yang di gunakan untuk orang sakit',
            'deskripsieng'=>'This application contains a food recipe that is used for sick people',
            'image'=>'slide.jpg'
        ],
    ];
    foreach ($slide as $key => $value) {
        Slide::create($value);
    }
    }
}
