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
                'name' => 'STONE ISLAND',
                'description' => '63565 Sweater van stevig katoen',
                'category_id' => 1,
                'amount' => '369.99',
                'image' => 'stoneislandP.jpeg'
            ],
            [
                'name' => 'STONE ISLAND',
                'description' => '65560 Sweater met merkapplicatie',
                'category_id' => 1,
                'amount' => '189.99',
                'image' => 'stoneIslandBlue.jpeg'  
            ],
            [
                'name' => 'DAILY PAPER',
                'description' => 'Captain hoodie met logoband',
                'category_id' => 1,
                'amount' => '89.99',
                'image' => 'dailypaperyellow.jpeg'
            ],
            [
                'name' => 'cp company',
                'description' => 'Sweater met piloten bril',
                'category_id' => 1,
                'amount' => '201.99',
                'image' => 'HerenCp.jpeg'  
            ],
            [
                'name' => 'Alix',
                'description' => 'Alix sweater 100% katoen',
                'category_id' => 2,
                'amount' => '79.99',
                'image' => 'vrouwenAlix.jpeg'  
            ],
            [
                'name' => 'DAILY PAPER',
                'description' => 'Captain hoodie met logoband',
                'category_id' => 2,
                'amount' => '99.99',
                'image' => 'vrouwenDailyPaper.jpeg'  
            ],
            [
                'name' => 'Club Nomade',
                'description' => 'Club Nomade sweater',
                'category_id' => 2,
                'amount' => '67.99',
                'image' => 'vrouwenNomade.jpeg'  
            ],
            [
                'name' => 'Gucci Kids',
                'description' => 'Kinder sweater Guccie swag',
                'category_id' => 3,
                'amount' => '149.99',
                'image' => 'kinderenGucci.jpeg'  
            ],
            [
                'name' => 'kenzo Kids',
                'description' => 'Kinder sweater Kenzo',
                'category_id' => 3,
                'amount' => '119.99',
                'image' => 'kinderenKenzo.jpeg'  
            ],
            [
                'name' => 'kenzo Paris Kids',
                'description' => 'Kinder sweater Kenzo Paris',
                'category_id' => 3,
                'amount' => '139.99',
                'image' => 'kinderenKenzoParis.jpeg'  
            ],            
            [
                'name' => 'TOMMY HILFIGER',
                'description' => 'Horloge TH1791121',
                'category_id' => 5,
                'amount' => '199.99',
                'image' => 'horlogeHilfiger.jpeg'  
            ],
            [
                'name' => 'EMPORIO ARMANI',
                'description' => 'Horloge AR1451',
                'category_id' => 5,
                'amount' => '529.99',
                'image' => 'horlogeArmani.jpeg'  
            ],
           [
                'name' => 'EMPORIO ARMANI',
                'description' => 'Horloge AR1451',
                'category_id' => 5,
                'amount' => '89.99',
                'image' => 'horlogeDaniel.jpeg'  
            ],
            [
                'name' => 'GUCCI',
                'description' => 'Horloge Diver YA136209',
                'category_id' => 5,
                'amount' => '1149.99',
                'image' => 'horlogeGucci.jpeg'  
            ],
            [ 
                'name' => 'RAY-BAN',
                'description' => 'Zonnebril Round Metal ORB3447',
                'category_id' => 4,
                'amount' => '142.99',
                'image' => 'zonnebrilRayBan.jpeg'  
            ],
            [ 
                'name' => 'DIOR',
                'description' => 'Zonnebril Diorstellaire 1',
                'category_id' => 4,
                'amount' => '340.50',
                'image' => 'zonnebrilDior.jpeg'  
            ],
            [ 
                'name' => 'MICHAEL MICHAEL KORS',
                'description' => 'Zonnebril Hvar MK5007',
                'category_id' => 4,
                'amount' => '160.99',
                'image' => 'zonnebrilMichael.jpeg'  
            ],      
            [ 
                'name' => 'RAY-BAN',
                'description' => 'Zonnebril RB3584N',
                'category_id' => 4,
                'amount' => '171.99',
                'image' => 'zonnebrilRayBan2.jpeg'  
            ],
            
            ]);
        }
    }