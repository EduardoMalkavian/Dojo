<?php

namespace Database\Seeders;

use App\Models\Stock_Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Stock_Locationseede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock_Location::create([
            'name'=> 'Racão Du Cão',
         
        ]);
    }
}
