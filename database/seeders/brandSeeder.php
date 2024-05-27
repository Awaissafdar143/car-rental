<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\brand;
use App\Models\vehicle_type;

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
        $data1=
        collect([
        ['vehicle_name'=>'Car'],
        ['vehicle_name'=>'Van'],
        ['vehicle_name'=>'Minibus'],
        ['vehicle_name'=>'Prestige']
    ]);
    $data->each(function($dat){
        brand::insert($dat);
    });
    $data1->each(function($dat){
        vehicle_type::insert($dat);
    });
        // brand::create($data);
    }
}
