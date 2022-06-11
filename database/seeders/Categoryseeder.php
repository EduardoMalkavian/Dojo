<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cozinha = Category::create([
            'name'=>'Cozinha',
        ]);

        Category::create([
            'name'=>'Panela',
            'category_id' => $cozinha->id
        ]);

        $pets = Category::create([
            'name'=>'Pets',
        ]);
           
        Category::create([
            'name'=>'Ração',
            'category_id' => $pets->id
        ]);
    }
}
