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
        memoCategoryTable::create([
            'name' => 'ただのメモ',
        ]);
        memoCategoryTable::create([
            'name' => '名言',
        ]);
        memoCategoryTable::create([
            'name' => 'なんでも',
        ]);
        memoCategoryTable::create([
            'name' => 'やることリスト',
        ]);
        memoCategoryTable::create([
            'name' => '買いたいものリスト',
        ]);
        memoCategoryTable::create([
            'name' => '今日のやること',
        ]);
        memoCategoryTable::create([
            'name' => '明日やること',
        ]);
    }
}
