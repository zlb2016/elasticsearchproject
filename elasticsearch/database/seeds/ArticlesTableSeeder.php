<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'elasticsearch',
                'content' => '一个基于Lucene的企业级搜索引擎'
            ],
            [
                'title' => 'elasticsearch analysis ik',
                'content' => '用于 elasticsearch 的中文分词插件'
            ]
        ]);
    }
}
