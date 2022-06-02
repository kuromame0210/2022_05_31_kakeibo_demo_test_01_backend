<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class memoCategoryTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fruit::create([
            'name' => 'ただのメモ',
        ]);
        Fruit::create([
            'name' => '名言',
        ]);
        Fruit::create([
            'name' => 'なんでも',
        ]);
        Fruit::create([
            'name' => 'やることリスト',
        ]);
        Fruit::create([
            'name' => '買いたいものリスト',
        ]);
        Fruit::create([
            'name' => '今日のやること',
        ]);
        Fruit::create([
            'name' => '明日やること',
        ]);
    }
}
