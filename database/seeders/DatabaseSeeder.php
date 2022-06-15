<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Stock_Location::class,
            Categoryseeder::class,
            Customerseeder::class,
            OrderItemseeder::class,
            Orderseeder::class,
            Bulkseeder::class,
            Productseeder::class,
            Userseeder::class,
            TypePeymentsseeder::class,
            
        ]);
    }
}
