<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Denomination;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Denomination::create([
            'type' => 'BILLETE',
            'value' => '5',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => '10',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => '20',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => '1',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => '0.5',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => '0.25',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => '0.1',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => '0.05',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => '0.01',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
        Denomination::create([
            'type' => 'OTRO',  //para ingresar el monto exacto
            'value' => '0',
            /* 'image' => 'https://dummyimage.com/200x150/000/fff&text=example' */
        ]);
    }
}
