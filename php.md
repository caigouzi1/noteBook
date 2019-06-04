# PHP

## 常用函数

### 时间函数

#### strtotime() 

将任何字符串的日期时间描述解析为 Unix 时间戳

```php
strtotime("2018-01-18 08:08:08");  // 将指定日期转成时间戳
```



### PHP Misc. 杂项函数

#### uniqid()

uniqid() 函数基于以微秒计的当前时间，生成一个唯一的 ID。

**注释：**由于基于系统时间，通过该函数生成的 ID 不是最佳的。如需生成绝对唯一的 ID，请使用 [md5()](https://www.runoob.com/php/func-string-md5.html) 函数。



## 接口文档

### apidoc

官方文档[http://apidocjs.com](http://apidocjs.com/)

#### 安装apiDoc

```
npm install apidoc -g
```

#### 文档示例

```php
    /**
     * @api               {post} qa/filter/all 过滤规则列表
     * @apiName           sort1
     * @apiGroup          Qa
     * @apiDescription    过滤规则表
     *
     * @apiSuccess {String} 	result 结果 suc-成功，error-失败
     * @apiSuccess {String} 	msg 返回信息
     * @apiSuccess {String} 	errorCode 错误编码
     * @apiSuccess {Object[]} 	data 返回数据
     * @apiSuccess {Number} 	data.id 规则编码
     * @apiSuccess {String} 	data.regular 过滤规则
     *
     *
     * @apiSuccessExample 示例
     * {
     *      result: "suc",
     *      msg: "操作成功",
     *      errorCode: 0,
     *      data: [
     *          {
     *              id: 1,
     *              regular: 'XXX',
     *          },
     *          {
     *              id: 2,
     *              regular: 'XXX',
     *          },
     *          ......
     *      ]
     * }
     */
```

#### 生成文档

cd到**apidoc.json**所在路径（即项目根目录）执行如下命令即可

```
apidoc -i src/ -o apidoc/
```

#### 一键运行

bat文件

```
start /B apidoc -i extend\%1\bench -o doc\%1\bench
start /B apidoc -i extend\%1\dock -o doc\%1\dock
```

运行命令

```
./doc.bat classic
```
















