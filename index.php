<?php
/**
 * 网站首页
**/
include("includes/common.php");
$my=isset($_GET['my'])?$_GET['my']:null;
?>
<?php
$count1=$DB->query("SELECT * from pay_order")->rowCount();
$count2=$DB->query("SELECT * from pay_user")->rowCount();
$count3=file_get_contents(SYSTEM_ROOT.'all.txt');
$count4=file_get_contents(SYSTEM_ROOT.'settle.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $conf['web_name']?>-行业领先的免签约支付平台</title>
<meta name="keywords" content="<?php echo $conf['web_name']?>,VCA云易支付,VCA易支付,易支付,免签约支付平台">
<meta name="description" content="<?php echo $conf['web_name']?>旗下免签约支付平台，致力于为更多用户提供稳定而又易用的支付平台！">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/xiaoqi/css/reset.css">
<link href="assets/xiaoqi/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="assets/xiaoqi/css/animate.css">
<link rel="stylesheet" href="assets/xiaoqi/css/swiper.css">
<link rel="stylesheet" href="assets/xiaoqi/css/flexslider.css">
<link href="assets/xiaoqi/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/xiaoqi/css/app.css">
</head>
<body>
<div id="loading" class="loading-layer">
<div class="adjust-block">
<div class="load ">
<span class="sharingan"></span>
<span class="sharingan"></span>
<span class="sharingan"></span></div>
</div>
</div>
<header class="header">
<div class="container">
<div class="row">
<div class="col-sm-2">
<span class="mobile-menu-icon visible-xs">
<a id="btn-nav" href="#">
<span>
</span>
<span>
</span>
<span>
</span>
</a>
</span>
</div>
<div class="col-sm-10">
<nav id="site-nav" class="nav-toggle">
<ul class="menu">
<li><a href="/user/login.php">商户登陆</a></li>
<li><a href="/user/reg.php?my=add">商户申请</a></li>
<li><a href="/SDK">在线测试</a></li>
<li><a href="/doc.html">开发文档</a></li>
<li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['web_qq']?>&site=qq&menu=yes">联系客服</a></li>
</ul>
</nav>
</div>
</div>
</div>
</header>
<div id="full-slider" class="flexslider section-slider">
<ul class="slides">
<li>
<img src="assets/xiaoqi/picture/a15b4afegy1fprvo9qkowj21rw0ufq9z.jpg" alt/>
<div class="adjust-block">
<h2 class="slide-title"><?php echo $conf['web_name']?></h2>
<p class="slide-description">截止目前已有<strong style="color:blue;"> <b><?php echo $count2?></b></strong> 个商户在使用本平台</p>
<p class="slide-description"><strong style="color:red;"> <b>每笔交易2.5％费率，提现仅1％手续费！</b></strong></p>
<div class="btns-row">
<a href="/user/login.php" class="btn btn-tran">登录商户</a>
<a href="/user/reg.php?my=add" class="btn btn-bl">申请接入</a>
</div>
</div>
</li>
<li>
<img src="assets/xiaoqi/picture/a15b4afegy1fprvovgjsdj21rw0ufwo4.jpg" alt/>
<div class="adjust-block">
<h2 class="slide-title"><?php echo $conf['web_name']?></h2>
<p class="slide-description">截止目前已有<strong style="color:blue;"> <b><?php echo $count2?></b></strong> 个商户在使用本平台</p>
<p class="slide-description"><strong style="color:red;"> <b>每笔交易2.5％费率，提现仅1％手续费！</b></strong></p>
<div class="btns-row">
<a href="/user/login.php" class="btn btn-tran">登录商户</a>
<a href="/user/reg.php?my=add" class="btn btn-bl">申请接入</a>
</div>
</div>
</li>
<li>
<img src="assets/xiaoqi/picture/a15b4afegy1fprvp89qv3j21rw0ufdi1.jpg" alt/>
<div class="adjust-block">
<h2 class="slide-title"><?php echo $conf['web_name']?></h2>
<p class="slide-description">截止目前已有<strong style="color:blue;"> <b><?php echo $count2?></b></strong> 个商户在使用本平台</p>
<p class="slide-description"><strong style="color:red;"> <b>每笔交易2.5％费率，提现仅1％手续费！</b></strong></p>
<div class="btns-row">
<a href="/user/login.php" class="btn btn-tran">登录商户</a>
<a href="/user/reg.php?my=add" class="btn btn-bl">申请接入</a>
</div>
</div>
</li>
<li>
<img src="assets/xiaoqi/picture/a15b4afegy1fprvptoihdj21rw0ufta9.jpg" alt/>
<div class="adjust-block">
<h2 class="slide-title"><?php echo $conf['web_name']?></h2>
<p class="slide-description">截止目前已有<strong style="color:blue;"> <b><?php echo $count2?></b></strong> 个商户在使用本平台</p>
<p class="slide-description"><strong style="color:red;"> <b>每笔交易2.5％费率，提现仅1％手续费！</b></strong></p>
<div class="btns-row">
<a href="/user/login.php" class="btn btn-tran">登录商户</a>
<a href="/user/reg.php?my=add" class="btn btn-bl">申请接入</a>
</div>
</div>
</li>
</ul>
</div>
<div class="section section-services" align="center">
<div class="title-block title-sub">
<h3 class="title-big">
我们的优势
</h3>
</div>
<div class="container">
<div class="row">
<div class="col-sm-4">
<div class="service-block service-left">
<div class="circle-icon feature-icon">
<i class="fa fa-balance-scale"></i></div>
<div class="serv-info">
<h3 class="serv-title">
分布执行</h3>
<p class="serv-desc">
程序深度优化，支付无延迟 </p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="service-block service-left">
<div class="circle-icon feature-icon">
<i class="fa fa-user-circle-o"></i></div>
<div class="serv-info">
<h3 class="serv-title">
账号管理 </h3>
<p class="serv-desc">
一账号可多网站接入，人性化 </p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="service-block service-left">
<div class="circle-icon feature-icon">
<i class="fa fa-bar-chart"></i></div>
<div class="serv-info">
<h3 class="serv-title">
实时监控 </h3>
<p class="serv-desc">
实时监控支付订单状态，0漏单</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="service-block service-left">
<div class="circle-icon feature-icon">
<i class="fa fa-check-circle-o"></i></div>
<div class="serv-info">
<h3 class="serv-title">
安全保证 </h3>
<p class="serv-desc">
本平台敏感信息修改均需密保</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="service-block service-left">
<div class="circle-icon feature-icon">
<i class="fa fa-crosshairs"></i></div>
<div class="serv-info">
<h3 class="serv-title">
T+1提现 </h3>
<p class="serv-desc">
T+1提现机制，让您的资金有保障！</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="service-block service-left">
<div class="circle-icon feature-icon">
<i class="fa fa-cubes"></i></div>
<div class="serv-info">
<h3 class="serv-title">
高效服务 </h3>
<p class="serv-desc">
7X24小时在线客服随叫随到！</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="section section-funinfo">
<div class="container">
<div class="row">
<div class="col-xs-6 col-sm-3">
<div class="count-block">
<div class="count-icon animate pulse" style="visibility: visible; animation-name: pulse;">
<i class="fa fa-users"></i>
</div>
<div class="count-amount animate zoomIn" data-from="25" data-to="<?php echo $count2?>" style="visibility: visible; animation-name: zoomIn;"><?php echo $count2?></div>
<div class="count-name">
商户数量
</div>
</div>
</div>
<div class="col-xs-6 col-sm-3">
<div class="count-block">
<div class="count-icon animate pulse" style="visibility: visible; animation-name: pulse;">
<i class="fa fa-bar-chart"></i>
</div>
<div class="count-amount animate zoomIn" data-from="25" data-to="<?php echo $count1?>" style="visibility: visible; animation-name: zoomIn;"><?php echo $count1?></div>
<div class="count-name">
订单总数
</div>
</div>
</div>
<div class="col-xs-6 col-sm-3">
<div class="count-block">
<div class="count-icon animate pulse" style="visibility: visible; animation-name: pulse;">
<i class="fa fa-cube"></i>
</div>
<div class="count-amount animate zoomIn" data-from="25" data-to="<?php echo $count4?>" style="visibility: visible; animation-name: zoomIn;"><?php echo $count4?></div>
<div class="count-name">
结算金额
</div>
</div>
</div>
<div class="col-xs-6 col-sm-3">
<div class="count-block">
<div class="count-icon animate pulse" style="visibility: visible; animation-name: pulse;">
<i class="fa fa-cubes"></i>
</div>
<div class="count-amount animate zoomIn" data-from="25" data-to="<?php echo $count3?>" style="visibility: visible; animation-name: zoomIn;"><?php echo $count3?></div>
<div class="count-name">
平台流水
</div>
</div>
</div>
</div>
</div>
</div>
<div class="section section-pricing">
<div class="title-block">
<div class="title-big">
平台合作伙伴
</div>
<center>
<img style="FILTER: gray()" src="assets/xiaoqi/picture/aliyun.png" width="85">
<img style="FILTER: gray()" src="assets/xiaoqi/picture/qqpay.png" width="85">
<img style="FILTER: gray()" src="assets/xiaoqi/picture/wxpay.png" width="85">
<img style="FILTER: gray()" src="assets/xiaoqi/picture/cftpay.png" width="85">
</center>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer-bottom">
<p class="copyright">
Copyright © 2017-2018 All Rights Reserved by <a href="" title="<?php echo $conf['web_name']?>">激翱网络工作室</a></br>
<a href="http://www.miitbeian.gov.cn/">蜀ICP备18026332号-2</a>
<audio autoplay="autoplay" height="100" width="100">
<source src="http://m10.music.126.net/20180330164721/43cf4f30ad5d4d4bbcd9c733c35d48f9/ymusic/e087/921e/439a/3a2a8d48558f97238b11aeecf2d31575.mp3" />
</audio> 
</p>
</footer>
<script src="assets/xiaoqi/js/jquery.js"></script>
<script src="assets/xiaoqi/js/image-loaded.js"></script>
<script src="assets/xiaoqi/js/wow.js"></script>
<script src="assets/xiaoqi/js/swiper.jquery.min.js"></script>
<script src="assets/xiaoqi/js/isotope.pkgd.min.js"></script>
<script src="assets/xiaoqi/js/jquery.countto.js"></script>
<script src="assets/xiaoqi/js/jquery.flexslider.js"></script>
<script src="assets/xiaoqi/js/app.js"></script>
</body>
</html>
</plaintext>
</body>
</html>