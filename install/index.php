<?php
    /**
     * Powered By Moe2D Neino
     *               |  |
     *               |  V
     *               |  **NeiNo是处在计划思想中的驱动系统，还没开始制作**
     *               V               
     *               **Moe2D是指您现在正在使用的极简化个人主页驱动系统。**
     */
    /**全局定义*/
    $PageName = 'Install';
    /**表单提交 */
?>
<html>
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <title>Moe2D|[<?php echo $PageName ?>]Page</title>
    <link rel="stylesheet" href="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
    <script src="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
    <style>
        .main{
            text-align:center;
            margin-left:30%;
            margin-right:30%;
        }
    </style>
    </head>
    <body>
        <div class="main">
        <div class="mdui-typo-display-1">WelCome Moe2D <?php echo $PageName?> Page<br/></div>
            请输入用于登录后台的账号以及密码，之后可以在后台进行更改
            <form action="core.php" method="get">
                基本设置
                <div class="mdui-textfield">
                    <p><input class="mdui-textfield-input" type="text" name="siteurl" placeholder="站点链接"/></p>
                    <p><input class="mdui-textfield-input" type="text" name="usename" placeholder="后台账号"/></p>
                    <p><input class="mdui-textfield-input" type="text" name="password" placeholder="后台密码" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="sitename" placeholder="站点名称" /></p>
                    <p><input  class="mdui-textfield-input"type="text" name="sitehead" placeholder="站点头像(Url)" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="sitesay" placeholder="站点描述" /></p>
                    <div class="mdui-typo-title">链接设置（不填则不输出）</div>
                    <p><input class="mdui-textfield-input" type="text" name="QQ-contact" placeholder="QQ(Url)"/></p>
                    <p><input class="mdui-textfield-input" type="text" name="WeChat-contact" placeholder="微信(Url)" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="Sina-contact" placeholder="微博(Url)" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="Netease-contact" placeholder="网易云(Url)" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="Mail-contact" placeholder="邮箱(Url)" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="Github-contact" placeholder="GitHub(Url)" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="Facebook-contact" placeholder="FaceBook(Url)" /></p>
                    <p><input class="mdui-textfield-input" type="text" name="Steam-contact" placeholder="FaceBook(Url)" /></p>
                </div>
                <input class="mdui-btn mdui-color-blue-200 mdui-ripple" type="submit" value="开始安装" />
            </form>
           <br/>
        </div>
    </body>
</html>