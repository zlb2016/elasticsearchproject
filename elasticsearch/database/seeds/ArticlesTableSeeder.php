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
                'title' => '作业克星写字机器人火了引发网友热议',
                'content' => '有媒体报道初三女生用压岁钱网购“写字机器人”帮自己抄写寒假作业,因为两天时间抄完作业还没有错别字,被母亲发现了端倪.'
            ],
            [
                'title' => 'NASA:2028年4名宇航员将重返月球停留7天',
                'content' => '美国国家航空航天局(NASA)计划将在2028年登陆月球,并建立一个可持续发展的月球殖民地,以便宇航员能够定期往返于地球.'
            ]
        ]);
    }
}
