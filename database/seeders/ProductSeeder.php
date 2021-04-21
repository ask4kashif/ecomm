<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
                'name'=>'IPhone',
                'price'=>'500',
                'category'=>'mobile',
                'description'=>'A very good mobile to use.',
                'gallery'=>'https://images.macrumors.com/article-new/2017/09/iphonexdesign-800x669.jpg',
            ],
            [
                'name'=>'Samsung',
                'price'=>'400',
                'category'=>'mobile',
                'description'=>'Mobile with good features.',
                'gallery'=>'https://images.macrumors.com/article-new/2017/09/iphonexdesign-800x669.jpg',
            ],
            [
                'name'=>'Samsung',
                'price'=>'3500',
                'category'=>'TV',
                'description'=>'Very cool fridge.',
                'gallery'=>'https://images.macrumors.com/article-new/2017/09/iphonexdesign-800x669.jpg',
            ],
            [
                'name'=>'Oppo',
                'price'=>'550',
                'category'=>'Fridge',
                'description'=>'New innovative fridge',
                'gallery'=>'https://brain-images-ssl.cdn.dixons.com/3/0/10174903/l_10174903_001.jpg',
            ],
            [
                'name'=>'IPhone',
                'price'=>'500',
                'category'=>'mobile',
                'description'=>'A very good mobile to use.',
                'gallery'=>'https://images.macrumors.com/article-new/2017/09/iphonexdesign-800x669.jpg',
            ],

        ]);

    }
}
