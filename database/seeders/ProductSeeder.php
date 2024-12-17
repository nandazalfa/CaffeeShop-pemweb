<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Espresso',
            'description' => 'Kopi hitam pekat',
            'price' => 20000,
            'stock' => 50,
        ]);
    
        Product::create([
            'name' => 'Cappuccino',
            'description' => 'Kopi susu dengan foam',
            'price' => 25000,
            'stock' => 30,
        ]);
        
    }
}
