<?php
namespace app\dock\controller;

use think\facade\Config;
use think\facade\Env;
//use \Env;

class Index
{
    public function index()
    {
        echo 'dock index index';
    }

    public function config()
    {

//        dump(Config::get('app.'));

        echo "<pre>";

//        优先级
        echo "app.test  --  " .Config::get('app.test') .'<br>';


        echo 'ENV配置  --  ' .Env::get('test') .'<br>';

//        yes 和 true 等效于 1
        dump(Env::get('app_debug'));


//        类数组配置

        echo '类数组配置 -- '. Env::get('DATABASE.username') .'<br>';

//        动态配置

        Config::set('app.test','动态配置');
        echo '动态配置app.test  --  ' .Config::get('app.test') .'<br>';
        echo "</pre>";
    }
}