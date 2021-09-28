<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
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
                'name' => 'iPhone X 64GB',
                'code' => 'iphone_x_64',
                'description' => 'Відмінний просунутий телефон з памяттю на 64 gb',
                'price' => '17000',
                'category_id' => 1,
                'image' => 'products/iphone_x.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'iPhone X 256GB',
                'code' => 'iphone_x_256',
                'description' => 'Відмінний просунутий телефон з памяттю на 256 gb',
                'price' => '19000',
                'category_id' => 1,
                'image' => 'products/iphone_x_silver.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'HTC One S',
                'code' => 'htc_one_s',
                'description' => 'Навіщо платити за зайве? Легендарний HTC One',
                'price' => '5000',
                'category_id' => 1,
                'image' => 'products/htc_one_s.png',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'iPhone 5SE',
                'code' => 'iphone_5se',
                'description' => 'Відмінний класичний iPhone',
                'price' => '4300',
                'category_id' => 1,
                'image' => 'products/iphone_5.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Навушники Beats Audio',
                'code' => 'beats_audio',
                'description' => 'Відмінний звук від Dr. Dre',
                'price' => '2800',
                'category_id' => 2,
                'image' => 'products/beats.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Камера GoPro',
                'code' => 'gopro',
                'description' => 'Знімай найяскравіші моменти з допомогою цієї камери',
                'price' => '5400',
                'category_id' => 2,
                'image' => 'products/gopro.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Камера Panasonic HC-V770',
                'code' => 'panasonic_hc-v770',
                'description' => 'Для серйозної відео зйомки потрібна серйозна камера. Panasonic HC-V770 для цих цілей кращий вибір!',
                'price' => '3300',
                'category_id' => 2,
                'image' => 'products/video_panasonic.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Кавомашина DeLongi',
                'code' => 'delongi',
                'description' => 'Добрий ранок починається з хорошої кави!',
                'price' => '4600',
                'category_id' => 3,
                'image' => 'products/delongi.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Холодильник Haier',
                'code' => 'haier',
                'description' => 'Для великої родини великий холодильник!',
                'price' => '7900',
                'category_id' => 3,
                'image' => 'products/haier.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Блендер Moulinex',
                'code' => 'moulinex',
                'description' => 'Для найсміливіших ідей',
                'price' => '1750',
                'category_id' => 3,
                'image' => 'products/moulinex.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Мясорубка Bosch',
                'code' => 'bosch',
                'description' => 'Любите домашні котлети? Вам безперечно варто подивитися на цю мясорубку!',
                'price' => '2500',
                'category_id' => 3,
                'image' => 'products/bosch.jpg',
                'count' => rand(0, 10),
            ],
        ]);
    }
}
