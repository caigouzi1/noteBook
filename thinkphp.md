

# THINKPHP5.1学习

## 配置

> #### 惯例配置->应用配置->模块配置->动态配置

- **惯例配置**：核心框架内置的配置文件，无需更改。

- **应用配置**：每个应用的全局配置文件（框架安装后会生成初始的应用配置文件），有部分配置参数仅能在应用配置文件中设置。

- **模块配置**：每个模块的配置文件（相同的配置参数会覆盖应用配置），有部分配置参数模块配置是无效的，因为已经使用过。

- **动态配置**：主要是指在控制器或者行为中进行（动态）更改配置，该配置方式只在当次请求有效，因为不会保存到配置文件中。

  

  获取配置参数的值可以使用下面的方式获取：
  
  ```php
  Config::get('app.');
  ```
  
  要使用`Config`类，必须先引入`think\facade\Config`或者`\Config`。
  
  #### 注意
  
  当app目录的模块中存在config文件配置时，根目录的config对应的模块会失效。



> ### 环境变量定义

可以在应用的根目录下定义一个特殊的`.env`环境变量文件，用于在开发过程中模拟环境变量配置（该文件建议在服务器部署的时候忽略），`.env`文件中的配置参数定义格式采用`ini`方式，例如：

 ```ini
 APP_DEBUG =  true
 APP_TRACE =  true
 ```

  #### 其它配置格式支持

默认的配置文件都是PHP数组方式，如果你需要使用其它格式的配置文件，你可以通过改变`CONFIG_EXT`**环境变量**的方式来更改配置类型。

在应用根目录的`.env`或者系统环境变量中设置

```ini
CONFIG_EXT=".ini"
```

支持的配置类型包括`.ini`、`.xml`、`.json` 、`.yaml`和 `.php` 在内的格式支持，配置后应用配置及模块配置必须统一使用相同的配置类型。

获取环境变量的值可以使用下面的方式获取：

```php
Env::get('database.username');
Env::get('database.password');
```

要使用`Env`类，必须先引入`think\facade\Env`或者`\Env`。

  #### 注意

- 环境配置优先级大于config配置。

- 环境变量配置的参数会全部转换为大写，值为 `null`，`no` 和 `false` 等效于 `""`，值为 `yes` 和 `true` 等效于 `"1"`。

- 当更改配置文件类型时，如果不存在该类型的配置文件则会默认使用`惯例配置`（convention.php中的配置）。

  

  ### 动态设置（慎用）

> `V5.1.18+`版本以上，不再建议使用动态配置，由于容器的特性，可能不会生效。

在控制器或者行为里面可以使用`set`方法或者助手函数动态设置参数（不过需要注意的是，动态设置生效的前提是该参数尚未被使用），格式：

```php
Config::set('配置文件名.配置参数','配置值');
// 或者使用助手函数
config('配置文件名.配置参数','配置值');
```



  ### 常用设置

- 开发调试

  用于显示错误信息，项目上线是应保证关闭

  ```php
  // 应用调试模式
  'app_debug'              => false,
  // 应用Trace
  'app_trace'              => false,
  ```

- 多层控制器
 ```php
  // 自动搜索控制器
  'controller_auto_search' => true,
 ```

- 默认控制器，更改默认访问地址

```php
// 默认模块名
'default_module'         => 'index',
// 禁止访问模块
'deny_module_list'       => ['common'],
// 默认控制器名
'default_controller'     => 'Index',
// 默认操作名
'default_action'         => 'index',
```