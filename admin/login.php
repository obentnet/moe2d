<?php
    session_start();
    include '../confirm.ini.php';
?>
<?php
    /**Login模块 */
?>


<h2>用户登录页面</h2>
<form action="loginProcess.php" method="post">
用户名：<input type="text" name="username"><br />
密  码：<input type="password" name="pwd"><br />
<input type="submit" name="sub" value="登录后台">
</form>
<?php
if(!empty($_GET['errno'])){
 if($_GET['errno']==1){
  echo "用户名或密码错误";
 }else if($_GET['errno']==2){
  echo "请输入用户名密码";
 }else if($_GET['errno']==3){
  echo "非法访问，请输入用户名和密码";
 }
}
?>
