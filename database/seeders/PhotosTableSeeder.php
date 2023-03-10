<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 27 ; $i++) { 
            $photo= new Photo();
            $photo->title= 'Photo: ' . $i;
            $photo->url= '/img/' . $i . '.png';

            $photo->save();
        }
    }
}
