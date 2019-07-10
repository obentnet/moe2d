<?php include '../confirm.ini.php'?>
<?php
session_start();
if(empty($_SESSION['username'])){
 header("Location: login.php?errno=3");
 exit();
}
?>
<html>
    <head>
        <title><?php echo $SiteName.' - 后台管理 Powered By Moe2d';?></title>
        <link rel="stylesheet" href="/admin/layui/css/layui.css"/>
        <link rel="stylesheet" href="/admin/layui/css/layui.mobile.css"/>
        <script src="/admin/layui/layui.js"></script>
        <style>
            body{
                background-color:#00000012;
            }
            .main-user-info{
                margin:2% 10% 0 10%;
            }
        </style>
    </head>
    <body>
        <div class="main">
                        <!--Head-->
                        <div class="head">
                 <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item"><a href="<?php echo $SiteUrl;?>"><i class="layui-icon">&#xe7ae;</i>&nbsp;&nbsp;网站</a></li>
                <li class="layui-nav-item"><a href="../admin/admin.php"><i class="layui-icon">&#xe665;</i>&nbsp;&nbsp;后台首页</a></li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe716;</i>&nbsp;&nbsp;设置</a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->
                    <dd><a href="../admin/user-set.php"><i class="layui-icon">&#xe66f;</i>&nbsp;&nbsp;个人设置</a></dd>
                    <dd><a href=""><i class="layui-icon">&#xe66a;</i>&nbsp;&nbsp;模板设置</a></dd>
                    <dd><a href="../admin/site-set.php"><i class="layui-icon">&#xe614;</i>&nbsp;&nbsp;站点设置</a></dd>
                    </dl>
                </li>
                 <li class="layui-nav-item"><a href="/admin/logout.php"><i class="layui-icon">&#x1007;</i>退出登录</a></li>
                </ul>
                
                <script>
                //注意：导航 依赖 element 模块，否则无法进行功能性操作
                layui.use('element', function(){
                var element = layui.element;
                
                //…
                });
                </script>
            </div>
            <!--EndHead-->
            <!--StartMain-->
            <div class="main-user-info">
                <div class="layui-anim layui-anim-up">
                    <div class="layui-card" style="margin-bottom:2%;">
                        <div class="layui-card-header"><?php echo '<h2>'.$UserName.' - 欢迎回家！</h2>';?></div>
                            <div class="layui-card-body">
                                <strong><p style="margin:0 0 0 5%;">网站概要</p></strong>
                                <p style="margin:3% 0 0 5%;">
                                    当前站点域名：<?php echo '<a href="'.$SiteUrl.'">'.$SiteUrl.'</a>';?><br/>
                                    用户名：<?php echo $UserName;?><br/>
                                    引擎：<a href="https://github.com/obentnet/moe2d">Moe2d V1.1</a>
                                </p>
                                <strong><p style="margin:3% 0 0 5%;">快速传送</p></strong>
                                <div style="margin:3% 0 0 5%;">
                                    <a href="<?php echo $SiteUrl;?>">站点首页</a>&nbsp;&nbsp;&nbsp;
                                    <a href="">模板设置</a>&nbsp;&nbsp;&nbsp;
                                    <a href="../admin/user-set.php">个人设置</a>&nbsp;&nbsp;&nbsp;
                                    <a href="">系统设置</a>&nbsp;&nbsp;&nbsp;
                                </div>
                                <strong><p style="margin:3% 0 0 5%;">链接详情</p></strong>
                                <div style="margin:3% 0 0 5%;">
                                    QQ:<?php echo $QQ_Link;?><br/>
                                    微信:<?php echo $WeChat_Link;?><br/>
                                    新浪:<?php echo $Sina_Link;?><br/>
                                    网易:<?php echo $Netease_Link;?><br/>
                                    Mail:<?php echo $Mail_Link;?><br/>
                                    GitHub:<?php echo $GitHub_Link;?><br/>
                                    FaceBook_Link:<?php echo $FaceBook_Link;?><br/>
                                    Steam:<?php echo $Steam_Link;?><br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>