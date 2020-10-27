<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [[
            'title' => 'テストタスク1',
            'body' => 'テストタスク1の内容です'
        ],
        [
            'title' => 'テストタスク2',
            'body' => 'テストタスク2の内容です'
        ]];
        // DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
