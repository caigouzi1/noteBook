<?php

namespace app\bench\controller;

use think\Controller;

class News extends Controller
{
    public function read($id)
    {
        echo $id;
        echo 'bench';
    }

    public function detail($name, $id)
    {
        echo $name . '-' . $id;
    }
}
