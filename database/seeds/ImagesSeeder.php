<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'product_id' => '1',
                'src' => 'product-1',
            ],
            [
                'product_id' => '2',
                'src' => 'product-2',
            ],
            [
                'product_id' => '3',
                'src' => 'product-3',
            ],
            [
                'product_id' => '4',
                'src' => 'product-4',
            ],
            [
                'product_id' => '5',
                'src' => 'product-5',
            ],
            [
                'product_id' => '6',
                'src' => 'product-6',
            ]
        ]);
    }
}
