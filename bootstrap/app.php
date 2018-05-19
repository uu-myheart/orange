<?php

use Illuminate\Container\Container;
use Symfony\Component\Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Events\Dispatcher;

// 创建容器
$app = new Container;
Container::setInstance($app);

// .env
(new Dotenv())->load(__DIR__ . '/../.env');

// 准备好数据库连接
$manager = new Manager;
$manager->addConnection(require __DIR__ . '/../config/database.php');
// $manager->setEventDispatcher(new Dispatcher($app));
$manager->setAsGlobal();
$manager->bootEloquent();

// 路由
(new Illuminate\Events\EventServiceProvider($app))->register();
(new Illuminate\Routing\RoutingServiceProvider($app))->register();
require __DIR__ . '/../app/routes.php';

return $app;