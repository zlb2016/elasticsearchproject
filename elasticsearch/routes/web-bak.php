<?php

use App\Models\Article;

Route::get('search', function () {
    // 为查看方便都转成数组
    dump(Article::all()->toArray());
    dump('下面搜索的是：企业搜索');
    dump(Article::search('企业搜索')->get()->toArray());
    dump('此处把content改为：能胜任上百个服务节点的扩展，并支持 PB 级别的结构化或者非结构化数据');
    // 修改 content 测试索引是否会自动同步
    $first = Article::find(1);
    // $first->content = '一个基于Lucene的企业级搜索引擎';
    $first->content = '能胜任上百个服务节点的扩展，并支持 PB 级别的结构化或者非结构化数据';
    $first->save();
    // 因 Elasticsearch 同步索引需要点时间此处休眠5秒钟
    sleep(5);
    dump('下面搜索的是：企业搜索');
    dump(Article::search('企业搜索')->get()->toArray());
    dump('下面搜索的是：能胜服务');
    dump(Article::search('能胜服务')->get()->toArray());
});