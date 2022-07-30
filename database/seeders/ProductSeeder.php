<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => 'Producto 1',
            'cost' => 50,
            'price' => 100,
            'barcode' => '1554896641',
            'stock' => 100,
            'category_id' => 1,
            'image' => 'producto1.png',
            'fecha_elaboracion' => Carbon::today()->toDateString(),
            'fecha_caducidad' => Carbon::today()->addYear()->toDateString()
        ]);
        Product::create([
            'name' => 'Producto 2',
            'cost' => 50,
            'price' => 100,
            'barcode' => '1554896641',
            'stock' => 100,
            'category_id' => 2,
            'image' => 'producto2.png',
            'fecha_elaboracion' => Carbon::today()->toDateString(),
            'fecha_caducidad' => Carbon::today()->addYear()->toDateString()
        ]);
        Product::create([
            'name' => 'Producto 3',
            'cost' => 50,
            'price' => 100,
            'barcode' => '1554896641',
            'stock' => 100,
            'image' => 'producto3.png',
            'fecha_elaboracion' => Carbon::today()->toDateString(),
            'fecha_caducidad' => Carbon::today()->addYear()->toDateString(),
            'category_id' => 3,
            
        ]);
        Product::create([
            'name' => 'Producto 4',
            'cost' => 50,
            'price' => 100,
            'barcode' => '1554896641',
            'stock' => 100,
            'category_id' => 4,
            'image' => 'producto4.png',
            'fecha_elaboracion' => Carbon::today()->toDateString(),
            'fecha_caducidad' => Carbon::today()->addYear()->toDateString()
        ]);
        //
    }
}
