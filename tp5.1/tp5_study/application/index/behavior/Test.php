<?php
/**
 * Created by PhpStorm.
 * User: Stump9
 * Date: 2019/8/20
 * Time: 17:02
 */

namespace app\index\behavior;

use think\facade\Response;

class Test
{
    public function run()
    {
        if(request()->method() == 'GET'){
//            header('Location: https://cn.bing.com/');
//            exit;
//            dump(header('Location: https://cn.bing.com/'));
        }
    }
}