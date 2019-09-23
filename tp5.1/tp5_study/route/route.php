<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//Route::get('hello/:name', 'index/hello');


// 一、 路由定义

//http://localhost:8000/index/news/read/id/5
//http://localhost:8000/new/5

//Route::rule('new/:id','index/News/read','GET|POST');

//Route::get('new/:id','News/read'); // 定义GET请求路由规则

//完全匹配
//Route::get('new/:id$','News/read');




// 二 、 变量规则

// 定义GET请求路由规则 并设置name变量规则

//http://localhost:8000/new/55
//Route::get('new/:id', 'News/read')
//    ->pattern(['id' => '\d+']);

//http://localhost:8000/item/hello-55
//Route::get('item/<name>-<id>', 'News/detail')
//    ->pattern(['name' => '\w+', 'id' => '\d+']);
//
//
//V5.1.6+版本之后
//Route::get('item/:name-:id', 'News/detail')
//    ->pattern(['name' => '[a-zA-Z]+', 'id' => '\d+']);

// 三 、 路由地址

//路由到模块/控制器/操作,支持路由到动态

//http://localhost:8000/read/new/5
//Route::get(':action/new/:id', 'index/News/:action');


//路由到操作方法
//http://localhost:8000/new/5
//Route::rule('new/:id','@index/News/read','get');
//也可以写成效果相同
//Route::get('new/:id','@index/News/read');


//路由到类的方法
//Route::get('new/:id','app\index\controller\News@read');


//路由到重定向地址

//Route::get('new/:id','https://cn.bing.com/');
//Route::get('new/:id','/index/news/read/id/:id');


//路由到模板

//http://localhost:8000/view/word
//Route::view('view/:name','index@hello');

//路由到闭包函数

//http://localhost:8000/hello/thinkphp
//use think\Request;
//Route::rule('hello/:name', function (Request $request, $name) {
//    $method = $request->method();
//    return '[' . $method . '] Hello,' . $name;
//});


//路由到Response对象

//http://localhost:8000/hello/thinkphp
//use think\Response;
//Route::get('hello/:name', function (Response $response, $name) {
//    return $response
//        ->data('Hello,' . $name)
//        ->code(200)
//        ->contentType('text/plain');
//});

// 四 、 路由参数

//http://localhost:8000/new/5.html
//Route::get('new/:id','index/News/read',['ext'=>'html']);

// Route::get('new/:id', 'News/read')
//     ->ext('html');

// 五 、路由分组和 miss路由

//http://localhost:8000/new/111
//http://localhost:8000/new/thinkphp
// Route::group('new', [
//     ':id'   => 'News/id',
//     ':name' => 'News/name',
// ])->pattern(['id' => '\d+', 'name' => '\a-z']);


// Route::group(['method' => 'get'], function () {
//     Route::rule('new/:id', 'index/News/id');
//     Route::rule('new/:name', 'index/News/name');
//     Route::miss('News/miss');
// })->pattern(['id' => '\d+', 'name' => '[a-z]+']);
//http://localhost:8000/new/AAA
// Route::miss('News/miss');

// 六 、资源路由

//http://localhost:8000/rest
// Route::resource('rest','index/Rest');

// 七 、快捷路由

//http://localhost:8000/new/info
// Route::controller('new','index/News');


// 八 、快捷路由

//http://localhost:8000/new/info
// Route::alias('new','index/News');

// 九 、路由绑定
//http://localhost:8000/info
// Route::bind('index/News');

// 十 、域名路由
url('index/news/read', 'id=5');


return [

];
