<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" href="__PUBLIC__/Style/css/style.css" type="text/css">
		<link rel="stylesheet" href="__PUBLIC__/Style/css/animate.css" type="text/css">
		<link rel="stylesheet" href="__PUBLIC__/Style/css/jquery.fullPage.css" type="text/css">
		<script type="text/javascript" src="__PUBLIC__/Style/js/jquery-2.0.1.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/Style/js/nav.js"></script>
	</head>
<body>
<!--header-->
    <header class="index-header">
  <div class="width1200">
    <div class="logo"><img src="__PUBLIC__/Style/img/logo.jpg" alt=""/></div>
    <div class="topnav">
        <ul>
            <li><a href="<?php echo U('Index/Index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Index/Index/service');?>">我们的服务</a></li>
            <li><a href="<?php echo U('Index/Index/achievement');?>">我们的成绩</a></li>
            <li><a href="#" id="navone">关于亿众</a></li>
            <li><a href="#" id="navtwo">职业发展</a></li>
            <li><a href="<?php echo U('Index/Index/index');?>">联系我们</a></li>
        </ul>
        <div class="navfixedone">
            <a href="<?php echo U('Index/Index/index');?>">团队管理</a>
            <a href="<?php echo U('Index/Index/index');?>">招贤纳士</a>
            <a href="<?php echo U('Index/Index/index');?>">联系我们</a>
        </div>
        <div class="navfixedtwo">
            <a href="<?php echo U('Index/Index/index');?>">亿众团队</a>
            <a href="<?php echo U('Index/Index/index');?>">招聘信息</a>
        </div>
    </div>
  </div>
</header>
<!--service-banner-->
<div class="ServiceBanner">
	<img src="__PUBLIC__/Style/img/pagebg/ServiceBg.jpg" alt="">
    <div class="ServiceBannerText">
    	<div class="ServiceBannerTitle revealOnScroll" data-animation="fadeInLeftPage" data-timeout="200">我们的服务</div>
        <div class="ServiceBannerTitleone revealOnScroll" data-animation="fadeInLeftPage" data-timeout="400">OUR SERVICE</div>
        <div class="ServiceBannerTitletwo revealOnScroll" data-animation="fadeInLeftPage" data-timeout="800">利用一线互联网研发团队和经验  服务于互联网转型企业和优质创客</div>
    </div>
</div>
<!--container-->
<div class="container">
    <div class="container1200 containermargin">
    	<div class="ServiceIcobox">
            <div class="ServiceIco revealOnScroll" data-animation="fadeInUpPage" data-timeout="100">
                <div class="Ico1"></div>
                <p>品牌推广</p>
            </div>
            <div class="ServiceIco revealOnScroll" data-animation="fadeInUpPage" data-timeout="200">
                <div class="Ico2"></div>
                <p>新媒体营销</p>
            </div>
            <div class="ServiceIco revealOnScroll" data-animation="fadeInUpPage" data-timeout="300">
                <div class="Ico3"></div>
                <p>电子商务</p>
            </div>
            <div class="ServiceIco revealOnScroll" data-animation="fadeInUpPage" data-timeout="100">
                <div class="Ico4"></div>
                <p>活动策划</p>
            </div>
            <div class="ServiceIco revealOnScroll" data-animation="fadeInUpPage" data-timeout="200">
                <div class="Ico5"></div>
                <p>数据分析</p>
            </div>
            <div class="ServiceIco revealOnScroll" data-animation="fadeInUpPage" data-timeout="300">
                <div class="Ico6"></div>
                <p>创意创新</p>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<div class="footer">
<!--     <div class="footerNav revealOnScroll" data-animation="fadeInDownPage" data-timeout="200">
        <ul>
            <li>
                <a href="#">首页</a>
            </li>
            <li>
                <a href="#">我们的服务</a>
            </li>
            <li>
                <a href="#">我们的成绩</a>
            </li>
            <li>
                <a href="#">关于亿众</a>
            </li>
            <li>
                <a href="#">职业发展</a>
            </li>
            <li>
                <a href="#">联系我们</a>
            </li>
        </ul>
    </div> -->
    <div class="footerQRcode revealOnScroll" data-animation="zoomInDownPage" data-timeout="100">
        <img src="__PUBLIC__/Style/img/qr.jpg" alt=""/>
    </div>
    <div class="footerSlogan revealOnScroll"  data-animation="zoomInUpPage" data-timeout="100">
        <img src="__PUBLIC__/Style/img/footer-img.jpg" alt=""/>
    </div>
    <div class="footerCopy revealOnScroll"  data-animation="zoomInDownPage" data-timeout="100">
        服务热线：010-84533466-831<a href="customer@easy-all.net">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;客服邮箱：customer@easy-all.net</a>
    </div>
    <div class="footerCopy revealOnScroll"  data-animation="zoomInUpPage" data-timeout="100">
        Copyright © 2016  <a href="<?php echo U('Index/Index/index');?>">北京亿众互动科技有限公司</a>版权所有<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;京ICP备16046790号-2</a>
    </div>
</div>
<!--revealOnScroll-->
<script src="__PUBLIC__/Style/js/modernizr-2.7.2.js"></script>
<script src="__PUBLIC__/Style/js/revealOnScroll.js"></script>