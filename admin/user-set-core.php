<?php
/*
    include("../confirm.ini.php");
    
    $Content_UserName = $UserName; ;//动态获取用户名

    $Content_Head = $SiteHead;//动态获取头像
 
    $Content_Password = $Password;//动态获取密码

    $NewUserName = $_GET['username'];

    $NewSiteHead = $_GET['sitehead'];

    $NewPassword = $_GET['password'];

    $text = file_get_contents('../confirm.ini.php');

    $text = str_replace($Content_UserName,$NewUserName,$text); //用户名

    $text = str_replace($Content_Head,$NewSiteHead,$text); //头像

    $text = str_replace($Content_Password,$NewPassword,$text); //密码

    file_put_contents('../confirm.ini.php',$text);
*/?>
<?php
    session_start();
    include("../confirm.ini.php");
    if($_session['username']=="$UserName" && $_session['pwd']=="$Password"){
    
        $Content_UserName = $UserName; ;//动态获取用户名
    
        $Content_Head = $SiteHead;//动态获取头像
     
        $Content_Password = $Password;//动态获取密码
    
        $NewUserName = $_GET['username'];
    
        $NewSiteHead = $_GET['sitehead'];
    
        $NewPassword = $_GET['password'];
    
        $text = file_get_contents('../confirm.ini.php');
    
        $text = str_replace($Content_UserName,$NewUserName,$text); //用户名
    
        $text = str_replace($Content_Head,$NewSiteHead,$text); //头像
    
        $text = str_replace($Content_Password,$NewPassword,$text); //密码
    
        file_put_contents('../confirm.ini.php',$text);
    }else{
        echo 'LogInfo Error~~！';
    }
?>