<?php

namespace Database\Seeders;

use App\Models\StockLocation;
use App\Models\TypePayment;
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
            Userseeder::class,
            StockLocationseeder::class,
            TypePaymentseeder::class,
        ]);
    }
}
