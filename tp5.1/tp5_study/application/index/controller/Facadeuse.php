<?php
/**
 * Created by PhpStorm.
 * User: Stump9
 * Date: 2019/8/17
 * Time: 10:07
 */

namespace app\index\controller;


use think\Facade;

class Facadeuse
{
    public function index()
    {
        $Test = new \Test();
        dump($Test->show());

        //无法静态调用Test类
        dump(\facade\Test::show());

        Facade::bind('facade\Testbind','\Testbind');

        dump(\facade\Testbind::show());
    }

}