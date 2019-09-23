<?php
namespace app\index\controller;

use think\Facade;
use think\facade\Config;

class Index
{
    public function index()
    {
        echo 'index index index';
    }

    /**
     * @param  string  $name 数据名称
     * @return mixed
     * @route('hello/:name')
     */
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function test()
    {
        // dump(\think\Container::get('app'));
        $a = 'aaaa';
        $a = $a ? : 'haha';
        dump($a);
    }

    public function config()
    {
        dump(Config::get('app.test'));
    }

    public function error()
    {
        echo "url不正确";
    }
}
