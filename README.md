# elasticsearchproject
use elasticsearch+analysis-ik to acheive search in laravel
## 使用方法
git clone https://github.com/zlb2016/elasticsearchproject.git

cd elasticsearchproject

composer install

## analysis-ik的使用
 analysis-ik 插件可以直接使用项目： https://github.com/medcl/elasticsearch-rtf

当前的版本是 `Elasticsearch 5.1.1`，ik 插件也是直接自带了。

安装好 ElasticSearch，跑起来服务，测试服务安装是否正确：

```bash
$ curl http://localhost:9200

{
  "name" : "e3ZsfC9",
  "cluster_name" : "elasticsearch",
  "cluster_uuid" : "4GVtZiPDTwGFlX7hsWQ6AQ",
  "version" : {
    "number" : "5.1.1",
    "build_hash" : "5395e21",
    "build_date" : "2016-12-06T12:36:15.409Z",
    "build_snapshot" : false,
    "lucene_version" : "6.3.0"
  },
  "tagline" : "You Know, for Search"
}
```
如果正确的打印以上信息，证明 ElasticSearch 已经安装好了，并且该项目中有ik 插件
## 项目运行
1.首先运行Elasticsearch 5.1.1，进入Elasticsearch文件夹下，命令：./bin/elasticsearch

2.进入laravel项目的elasticsearch的文件夹下，命令：php artisan serve

3.访问localhost:8000/即可查询


