<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MemoCategories;

class memoCategoryTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemoCategories::create([
            'name' => 'ただのメモ',
        ]);
        MemoCategories::create([
            'name' => '名言',
        ]);
        MemoCategories::create([
            'name' => 'なんでも',
        ]);
        MemoCategories::create([
            'name' => 'やることリスト',
        ]);
        MemoCategories::create([
            'name' => '買いたいものリスト',
        ]);
        MemoCategories::create([
            'name' => '今日のやること',
        ]);
        MemoCategories::create([
            'name' => '明日やること',
        ]);
    }
}
