<?php
    /**基本设置 */
    $SiteUrl = $_GET['siteurl'];
    $UserName = $_GET['usename'];
    $PassWord = $_GET['password'];
    $SiteName = $_GET['sitename'];
    $SiteHead = $_GET['sitehead'];
    $SiteSay = $_GET['sitesay'];
    /**默认模板地址 */

    $DefaultTheme = 'themes/default/index.php';

    /**链接设置 */

    $QQ_Link = $_GET['QQ-contact'];
    $WeChat_Link = $_GET['WeChat-contact'];
    $Sina_Link = $_GET['Sina-contact'];
    $Netease_Link = $_GET['Netease-contact'];
    $Mail_Link = $_GET['Mail-contact'];
    $GitHub_Link = $_GET['Github-contact'];
    $FaceBook_Link = $_GET['Facebook-contact'];
    $Steam_Link = $_GET['Steam-contact'];

    /**系统内设 */

    $ThemeName = 'default';

    $MDUI_CSS = 'https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css';
    $MDUI_JS = 'https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js';

    /**写入 */
    $fn = fopen("../confirm.ini.php","w");
    $result = fwrite($fn,"
    <?php
    /**
     * 这是个属于系统配置的文件，如果不懂请不要随意更改~
    */
    ?>
    
    <?php


    /** 基本设置 */
    \$SiteUrl = '$SiteUrl';
    \$UserName = '$UserName';
    \$Password = '$PassWord';
    \$SiteName = '$SiteName';
    \$SiteHead = '$SiteHead';
    \$SiteSay  = '$SiteSay';

    \$DefaultTheme = 'themes/default';

    /**链接设置 */

    \$QQ_Link = '$QQ_Link';
    \$WeChat_Link = '$WeChat_Link';
    \$Sina_Link = '$Sina_Link';
    \$Netease_Link = '$Netease_Link';
    \$Mail_Link = '$Mail_Link';
    \$GitHub_Link = '$GitHub_Link';
    \$FaceBook_Link = '$FaceBook_Link';
    \$Steam_Link = '$Steam_Link';

    /**系统内设*/
    
    \$MDUI_CSS = '$MDUI_CSS';

    \$MDUI_JS = '$MDUI_JS';

    ?>
    ");
    fclose($fn);
?>

<?php
/**重写首页 */
    $fn = fopen("../index.php","w");
    $result = fwrite($fn,"
        <?php 
        include './confirm.ini.php';
        \$IndexFD = './vip.lock_1Jnver_WINDOWS';
        if(is_readable(\$IndexFD) == false){
            die('请确保文件没有缺失！');
        }else{
            include './themes/$ThemeName/index.php';
        }
        ?>
    ");
    fclose($fn);
?>

<?php 
echo '安装完成,已自动导入默认模板<br/>';
echo '<a href="http://';
echo $SiteUrl;
echo '">点我进入</a>';
?>