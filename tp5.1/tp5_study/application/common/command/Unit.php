<?php

namespace app\common\command;

use think\console\command\Make;
use think\console\input\Option;
use think\facade\Config;
use think\facade\App;

class Unit extends Make
{
    protected $type = "Unit";

    protected function configure()
    {
        parent::configure();
        $this->setName('make:unit')
            ->addOption('api', null, Option::VALUE_NONE, 'Generate an api controller class.')
            ->addOption('plain', null, Option::VALUE_NONE, 'Generate an empty controller class.')
            ->setDescription('Create a new resource controller class');
    }

    protected function getStub()
    {
        $stubPath = __DIR__ . DIRECTORY_SEPARATOR . 'stubs' . DIRECTORY_SEPARATOR;

//        if ($this->input->getOption('api')) {
//            return $stubPath . 'controller.api.stub';
//        }

        if ($this->input->getOption('plain')) {
            return $stubPath . 'unit.plain.stub';
        }

        return $stubPath . 'unit.stub';
    }

    protected function getClassName($name)
    {
        return parent::getClassName($name) . (Config::get('controller_suffix') ? ucfirst(Config::get('url_controller_layer')) : '');
    }

    protected function getNamespace($appNamespace, $module)
    {
        return $module ? 'tests\\' . $module : 'tests';
    }

    //重写生成文件内容方法
    protected function buildClass($name)
    {
        $stub = file_get_contents($this->getStub());

        $namespace = trim(implode('\\', array_slice(explode('\\', $name), 0, -1)), '\\');

        $class = str_replace($namespace . '\\', '', $name);

        $BaseUrl = trim(str_replace('\\', '/', strtolower($name)), 'tests/');


        return str_replace(['{%className%}', '{%actionSuffix%}', '{%namespace%}', '{%app_namespace%}', '{%BaseUrl%}'], [
            $class . 'Test',
            Config::get('action_suffix'),
            $namespace,
            App::getNamespace(),
            $BaseUrl,
        ], $stub);
    }

    protected function getPathName($name)
    {
        $name = str_replace(App::getNamespace() . '\\', '', $name);

        return App::getRootPath() . ltrim(str_replace('\\', '/', $name . 'Test'), '/') . '.php';
    }
}