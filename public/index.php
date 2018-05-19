<?php

// Composer 自动加载
require __DIR__ . '/../vendor/autoload.php';

// 创建容器
$app = require __DIR__ . '/../bootstrap/app.php';

// 处理请求
$request = Illuminate\Http\Request::createFromGlobals();
$response = app('router')->dispatch($request);
$response->send();