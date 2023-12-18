<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hathi;
use Illuminate\Support\Facades\File;

class HathiSeeder extends Seeder
{
 
    public function run(): void
    {

        $json = File::get(path:"database/json/hathis.json");
        $hathis= collect(json_decode($json));

        $hathis->each(function($hathi)
        {
            Hathi::create([
                'name'=>$hathi->name,
                'email'=>$hathi->email,
                'age'=>$hathi->age,
                'city'=>$hathi->city
            ]);
        });
    }
}
