<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Мобільні телефони',
                'code' => 'mobiles',
                'description' => 'Опис до мобільних телефонів',
                'image' => 'categories/mobile.jpg',
            ],
            [
                'name' => 'Портативна техніка',
                'code' => 'portable',
                'description' => 'Опис портативної техніки',
                'image' => 'categories/portable.jpg',
            ],
            [
                'name' => 'Побутова техніка',
                'code' => 'appliances',
                'description' => 'Опис побутової техніки',
                'image' => 'categories/appliance.jpg',
            ],
        ]);
    }
}
