<?php

namespace app\index\controller;

use think\Controller;

class News extends Controller
{
    public function read($id)
    {
        echo $id;
    }

    public function detail($name, $id)
    {
        echo $name . '-' . $id;
    }

    public function id($id)
    {
        echo 'index/news/id  ->  '.$id;
    }

    public function name($name)
    {
        echo'index/news/name  -> '. $name;
    }

    public function miss()
    {
        echo 'miss路由';
    }

    public function getInfo()
    {
        echo '快捷路由:info';
    }

    public function info()
    {
        echo '别名路由:info';
    }
}
