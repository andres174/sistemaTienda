<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'CATEGORIA 1',
            'image' => 'https://dummyimage.com/200x150/000/fff&text=example'
        ]);
        Category::create([
            'name' => 'CATEGORIA 2',
            'image' => 'https://dummyimage.com/200x150/000/fff&text=example'
        ]);
        Category::create([
            'name' => 'CATEGORIA 3',
            'image' => 'https://dummyimage.com/200x150/000/fff&text=example'
        ]);
        Category::create([
            'name' => 'CATEGORIA 4',
            'image' => 'https://dummyimage.com/200x150/000/fff&text=example'
        ]);
    }
}
