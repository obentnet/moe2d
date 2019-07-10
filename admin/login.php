<?php
    session_start();
    include '../confirm.ini.php';
?>
<?php
    /**Login模块 */
?>

<html>
    <head>
        <title><?php echo $SiteName.' - 后台管理 Powered By Moe2d'?></title>
        <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <style>
        body{text-align:center;}
        .main{
            text-align:center;
            margin:0 40% 0% 40%;
        }
    </style>
<h2>用户登录页面</h2>
<div class="main">
<div class="input-group">
<div class="input">
<form action="loginProcess.php" method="post">
用户名：<input type="text" class="form-control" name="username"><br />
密  码：<input type="password" class="form-control" name="pwd"><br />
<br/><br/><br/>
<input class="btn btn-primary" type="submit" name="sub" value="登录后台">
</div>
</form>
<p align="right"><a href="https://github.com/obentnet/moe2d#%E8%B4%A6%E5%8F%B7%E5%AF%86%E7%A0%81%E9%97%AE%E9%A2%98" target="_blank">忘记密码？</a></p>
</div>
</div>


<?php
if(!empty($_GET['errno'])){
 if($_GET['errno']==1){
  echo '
  <div class="alert alert-danger" role="alert">用户名或密码错误</div>
  ';
 }else if($_GET['errno']==2){
  echo '
  <div class="alert alert-danger" role="alert">请输入用户名密码</div>
  ';
 }else if($_GET['errno']==3){
  echo '<div class="alert alert-danger" role="alert">非法访问，请输入用户名和密码</div>';
 }
}
?>
</html>
