            <!--Head-->
            <div class="head">
                 <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item"><a href="<?php echo $SiteUrl;?>"><i class="layui-icon">&#xe7ae;</i>网站</a></li>
                <li class="layui-nav-item"><i class="layui-icon">&#xe665;</i>后台首页</li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe716;</i>设置</a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->
                    <dd><a href="../admin/user-set.php"><i class="layui-icon">&#xe66f;</i>个人设置</a></dd>
                    <dd><a href=""><i class="layui-icon">&#xe66a;</i>模板设置</a></dd>
                    <dd><a href=""><i class="layui-icon">&#xe614;</i>站点设置</a></dd>
                    </dl>
                </li>
                 <li class="layui-nav-item"><a href="/admin/logout.php"><i class="layui-icon">&#x1007;</i>退出登录</a></li>
                </ul>
                
                <script>
                
                layui.use('element', function(){
                var element = layui.element;
                
                
                });
                </script>
            </div>
            <!--EndHead-->