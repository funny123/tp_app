<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"E:\www\tp_app\public/../application/login\view\login\index.html";i:1471424949;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <form action="<?php echo url('login'); ?>" method="post">
        <label for="name">用户名:</label><input type="text" name="name" id="name" /><br>
        <label for="password">密码:</label><input type="password" name="password" id="password" />
        <button type="submit">登录</button>
    </form>
</body>
</html>