
<?php
 /**引用配置文件 */
 include './confirm.ini.php';
?>

<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>It's ME | しら</title>
<link href="<?php echo $ThemeURL;?>/fanvicon.ico" rel="shortcut icon" type="image/x-icon" /> 
<link rel="stylesheet" href="<?php echo $ThemeURL;?>/css/style.css">
<link rel="stylesheet" href="<?php echo $ThemeURL;?>/dist/styles/Vidage.css" />
<link rel="stylesheet" href="<?php echo $ThemeURL;?>/css/ionicons.min.css">
<link href="<?php echo $ThemeURL;?>/dist/mfb.css" rel="stylesheet">
<!--[if IE]>
	<script src="//cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
<![endif]-->
<style>
.cs{
	text-align:center;
    font-family:微软雅黑;
	color:rgba(0, 150, 136, 0.59);
}
.cs h3{
color:rgba(206, 0, 255, 0.41);
}
.cs h4{
color:#bc87ff;
}
img#logo {
    width: 128px;
    background-size: cover;
    border-radius: 200px;
    box-shadow: 0px 0px 40px rgba(191, 128, 249, 0.72);
    border: 3px solid #b400ff;
    opacity: 1;
    margin: 0 auto;
    margin-top: 20px;
	margin-bottom: 20px;
	transition: all 1.0s;  
}
#logo:hover {
    box-shadow: 0 0 10px #fff;
    -webkit-box-shadow: 0 0 19px #fff;
    transform:rotate(360deg);
    -ms-transform:rotate(360deg); 	/* IE 9 */
    -moz-transform:rotate(360deg); 	/* Firefox */
    -webkit-transform:rotate(360deg); /* Safari 和 Chrome */
    -o-transform:rotate(360deg); 	/* Opera */
    filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
  .mfb-component__button--main, .mfb-component__button--child {
   background-color: #3f00ff;
  }
</style>
</head>
<body>
<!-- Vidage sample structure -->
	<div class="Vidage">
		<div class="Vidage__image" style="background-image:url(https://s2.ax1x.com/2019/07/06/Z0MXFg.jpg);background-repeat:no-repeat;background-attachment: fixed;"></div>
	</div>
<div class="cs">
	<br>
	<img src="<?php echo $SiteHead;?>" id="logo">
	<h1><?php echo $SiteName;?></h1>
    <br>
    <h4>这是来自moe2d自带的主题</h4>
    <br><br>
	<h3><?php echo $SiteSay;?>!</h3>
	<br><br><br>
	<a href="<?php echo $QQ_Link?>" target="_Blank"><button class="btn-6">QQ</button></a>
	<a href="<?php echo $WeChat_Link?>" target="_Blank"><button class="btn-2">微信</button></a>
    <a href="<?php echo $Sina_Link?>" target="_Blank"><button class="btn-5">新浪微博</button></a>
    <a href="<?php echo $Netease_Link?>" target="_Blank"><button class="btn-4">网易云</button></a>
    <br>
	<a href="<?php echo $Mail_Link;?>" target="_Blank"><button class="btn-7">邮箱</button></a>
    <a href="<?php echo $GitHub_Link;?>" target="_Blank"><button class="btn-1">GitHub</button></a>
    <a href="<?php echo $FaceBook_Link;?>" target="_Blank"><button class="btn-4">FaceBook</button></a>
  	<a href="<?php echo $Steam_Link;?>"><button class="btn-6" target="_Blank">Steam</button></a>
</div>
</body>
</html>