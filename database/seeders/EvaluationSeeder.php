<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 一件だけinsertする
        DB::table('evaluations')->insert([
            'category' => '集団行動',
            'title' => '着席する',
            'evaluation' => '◎',
            'detail' => '自分から空気を察して着席する力が定着しているように思える。',
            'teacher' => '佐藤',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        # paramに配列を代入
        $param = [
            [
                'category' => 'セルフコントロール',
                'title' => '失敗の受け入れ',
                'evaluation' => '✖︎',
                'detail' => '11月頭の椅子取りゲームで負けて他の子のことを罵倒していた。',
                'teacher' => '佐藤',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'category' => '動作・運動',
                'title' => '苦手なことへの克服',
                'evaluation' => '△',
                'detail' => 'ボール遊びへの抵抗が少しあり、機嫌が悪くなる。',
                'teacher' => '佐藤',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('evaluations')->insert($param);
    }
}
