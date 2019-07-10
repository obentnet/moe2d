<?php
    session_start();
    include("../confirm.ini.php");
    if($_SESSION['username']==$UserName){
    
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
        
        echo '提交成功';
    }else{
        echo 'LogInfo Error~~！';
    }
    echo '
        <a href="../admin/admin.php"><button>Back</button></a>
    ';
?>