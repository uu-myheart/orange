<?php

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager;

// 创建容器
$app = new Container;
Container::setInstance($app);

// 准备好数据库连接
$manager = new Manager;
$manager->addConnection(require __DIR__ . '/../config/database.php');
$manager->setAsGlobal();
$manager->bootEloquent();

// 路由
(new Illuminate\Events\EventServiceProvider($app))->register();
(new Illuminate\Routing\RoutingServiceProvider($app))->register();
require __DIR__ . '/../app/Http/routes.php';

return $app;