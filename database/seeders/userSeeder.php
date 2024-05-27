<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=
      collect(
        [
          [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
            'utype'=>'ADM'
          ],
          [
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('user')
          ],
        ]
          );

          $data->each(function($dat){
            user::insert($dat);
        });
    }
}
