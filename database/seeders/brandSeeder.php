<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\brand;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=
        collect([
        ['brand_name'=>'Toyta'],
        ['brand_name'=>'Honda'],
        ['brand_name'=>'Audi'],
        ['brand_name'=>'Ford'],
        ['brand_name'=>'Mercidies'],
        ['brand_name'=>'BMW'],
        ['brand_name'=>'Hyundai']
    ]);
    $data->each(function($dat){
        brand::insert($dat);
    });
        // brand::create($data);
    }
}
