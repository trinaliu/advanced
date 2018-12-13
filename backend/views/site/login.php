<?php
$this->title = 'Login';
?>
<link href="/css/login.css" type="text/css" rel="stylesheet">
<div class="login">
    <h1 class="login-title"><strong>Admin</strong>Login</h1>
    <div class="login-box">
        <form role="form" action="/site/login" method="post">
            <div class="form-group">
                <input type="type" name="LoginForm[username]" placeholder="登录邮箱">
            </div>
            <div class="form-group">
                <input type="password" name="LoginForm[password]" placeholder="密码">
            </div>
            <div class="login-password form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="LoginForm['rememberMe']" value="1" checked> 记住密码</label>
                </div>
                <div class="forgetPassword"><a href="#">忘记密码</a></div>
            </div>
            <button type="submit" class="submit">登录</button>
        </form>
    </div>
</div>