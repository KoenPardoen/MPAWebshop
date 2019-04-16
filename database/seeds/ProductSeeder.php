<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'swaggerjaggers',
                'description' => 'Met deze schoenen ben je een ekte baas, je weet niet at je mist!',
                'category_id' => 1,
                'amount' => '499.99',
                'image' => 'shoes.jpeg'
            ],
            [
                'name' => 'Appleshoes',
                'description' => 'De schoenen waar je echt mee kan flexen!',
                'category_id' => 2,
                'amount' => '999.99',
                'image' => 'shoes2.jpg'  
            ],
            [
                'name' => 'Chubaki',
                'description' => 'Heerlijk om door het bos te lopen opzoek naar een chubakabra.',
                'category_id' => 1,
                'amount' => '670.99',
                'image' => 'shoes3.jpg'
            ]
            ]);
        }
    }