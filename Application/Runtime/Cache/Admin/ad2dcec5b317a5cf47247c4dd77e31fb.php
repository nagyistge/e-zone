<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>亿众互动</title>
    <meta name="keywords" content="isocial">
    <meta name="description" content="isocial">
    <link href="__PUBLIC__/Resources/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="__PUBLIC__/Resources/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    <link href="__PUBLIC__/Resources/css/animate.css" rel="stylesheet">
    <link href="__PUBLIC__/Resources/css/style.css?v=2.2.0" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name" style="font-size:80px;">E-ZONE</h1>
            </div>
            <h3>欢迎使用亿众互动后台管理</h3>
            <form class="m-t" role="form" action="<?php echo U('Admin/Login/login');?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
    </div>
    <script src="__PUBLIC__/Resources/js/jquery-2.1.1.min.js"></script>
    <script src="__PUBLIC__/Resources/js/bootstrap.min.js?v=3.4.0"></script>
</body>
</html>