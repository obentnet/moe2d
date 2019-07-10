<?php
    session_start();
    include("../confirm.ini.php");
    if($_SESSION['username']==$UserName){
    
        $Content_SiteUrl = $SiteUrl; ;//动态获取站点链接
    
        $Content_SiteName = $SiteName;//动态获取站点名
     
        $Content_SiteSay = $SiteSay;//动态获取站点叙述
    
        $NewUserSiteUrl = $_GET['siteurl'];
    
        $NewSiteName = $_GET['sitename'];
    
        $NewSiteSay = $_GET['sitesay'];
    
        $text = file_get_contents('../confirm.ini.php');
    
        $text = str_replace($Content_SiteUrl,$NewSiteName,$text); //站点链接
    
        $text = str_replace($Content_SiteName,$NewSiteName,$text); //站点名
    
        $text = str_replace($Content_SiteSay,$NewSiteSay,$text); //站点叙述
    
        file_put_contents('../confirm.ini.php',$text);
        
        echo '提交成功';
    }else{
        echo 'LogInfo Error~~！';
    }
    echo '
        <a href="../admin/admin.php"><button>Back</button></a>
    ';
?>