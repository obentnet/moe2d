<?php
    session_start();
    include("../confirm.ini.php");
    if($_SESSION['username']==$UserName){
    
        $Content_QQ_Link = $QQ_Link;
        $Content_WeChat_Link = $WeChat_Link;
        $Content_Sina_Link = $Sina_Link;
        $Content_Netease_Link = $Netease_Link;
        $Content_Mail_Link = $Mail_Link;
        $Content_GitHub_Link = $GitHub_Link;
        $Content_FaceBook_Link = $FaceBook_Link;
        $Content_Steam_Link = $Steam_Link;


        $NewQQ_Link = $_GET['qqlink'];
        $NewWeChat_Link = $_GET['wechatlink'];
        $NewSina_Link = $_GET['sinalink'];
        $NewNetease_Link = $_GET['neteaselink'];
        $NewMail_Link = $_GET['maillink'];
        $NewGitHub_Link = $_GET['githublink'];
        $NewFaceBook_Link = $_GET['facebooklink'];
        $NewSteam_Link = $_GET['steamlink'];

        $text = file_get_contents('../confirm.ini.php');
    
        $text = str_replace($Content_QQ_Link,$NewQQ_Link,$text);
        $text = str_replace($Content_WeChat_Link,$NewWeChat_Link,$text);
        $text = str_replace($Content_Sina_Link,$NewSina_Link,$text);
        $text = str_replace($Content_Netease_Link,$NewNetease_Link,$text);
        $text = str_replace($Content_Mail_Link,$NewMail_Link,$text);
        $text = str_replace($Content_GitHub_Link,$NewGitHub_Link,$text);
        $text = str_replace($Content_FaceBook_Link,$NewFaceBook_Link,$text);
        $text = str_replace($Content_Steam_Link,$NewSteam_Link,$text);

        file_put_contents('../confirm.ini.php',$text);
        
        echo '提交成功';
    }else{
        echo 'LogInfo Error~~！';
    }
    echo '
        <a href="../admin/admin.php"><button>Back</button></a>
    ';
?>