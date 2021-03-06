<?php
    include '../confirm.ini.php';
?>
<html>
    <head>
        <title><?php echo $SiteName.' - 站点设置 Powered By Moe2d';?></title>
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
                <li class="layui-nav-item"><a href="<?php echo $SiteUrl;?>"><i class="layui-icon">&#xe7ae;</i>网站</a></li>
                <li class="layui-nav-item"><a href="../admin/admin.php"><i class="layui-icon">&#xe665;</i>后台首页</a></li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe716;</i>设置</a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->
                    <dd><a href="../admin/user-set.php"><i class="layui-icon">&#xe66f;</i>个人设置</a></dd>
                    <dd><a href="../admin/url-set.php"><i class="layui-icon">&#xe66a;</i>链接设置</a></dd>
                    <dd><a href="../admin/site-set.php"><i class="layui-icon">&#xe614;</i>站点设置</a></dd>
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
                        <!--StartMain-->
                        <div class="main-user-info">
                <div class="layui-anim layui-anim-up">
                    <div class="layui-card" style="margin-bottom:2%;">
                        <div class="layui-card-header"><?php echo '<h2>'.$SiteName.' - 的站点设置</h2>';?></div>
                            <div class="layui-card-body">
                                <strong><p style="margin:0 0 0 5%;">站点设置</p></strong>
                                <p style="margin:3% 0 0 5%;">
                                    

                                    <form class="layui-form" action="site-set-core.php" method="get">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">站点链接</label>
                                        <div class="layui-input-block">
                                        <input type="text" name="siteurl" required  lay-verify="required" value="<?php echo $SiteUrl;?>" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">站点名字</label>
                                        <div class="layui-input-block">
                                        <input type="text" name="sitename" required  lay-verify="required" value="<?php echo $SiteName;?>" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">站点叙述</label>
                                        <div class="layui-input-block">
                                        <input type="text" name="sitesay" required  lay-verify="required" value="<?php echo $SiteSay?>" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                        </div>
                                    </div>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>