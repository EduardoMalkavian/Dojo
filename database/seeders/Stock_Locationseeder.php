<?php

namespace Database\Seeders;

use App\Models\Stock_Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class stocklocationseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock_Location::create([
            'description'=> 'Estoque Central'

        ]);
    }
}
