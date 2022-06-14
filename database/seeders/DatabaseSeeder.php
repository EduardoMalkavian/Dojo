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
            Categoryseeder::class,
            Customerseeder::class,
            OrderItemseeder::class,
            Orderseeder::class,
            Bulkseeder::class,
            Productseeder::class,
            Stock_Locationseeder::class,
            TypePeymentsseeder::class,
            Userseeder::class,
        ]);
    }
}
