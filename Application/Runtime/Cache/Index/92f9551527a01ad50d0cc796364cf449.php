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
	<img src="__PUBLIC__/Style/img/pagebg/OurgradesBg.jpg" alt="">
    <div class="ServiceBannerText">
    	<div class="ServiceBannerTitle revealOnScroll" data-animation="fadeInLeftPage" data-timeout="200">我们的成绩</div>
        <div class="ServiceBannerTitleone revealOnScroll" data-animation="fadeInLeftPage" data-timeout="400">OUR GRADES</div>
        <div class="ServiceBannerTitletwo revealOnScroll" data-animation="fadeInLeftPage" data-timeout="800">品牌营销策划  新媒体营销  电子商务  品牌VI设计及品牌创建推广</div>
    </div>
</div>
<!--container-->
<div class="container">
    <div class="container1200">
    	<div class="TitleImage revealOnScroll" data-animation="fadeIn" data-timeout="600">
        	<img src="__PUBLIC__/Style/img/title/CaseShow.jpg" alt=""/>
        </div>
      <div class="CaseShownav">
        	<ul>
            	<li>
                	<a id="NavPcweb">PC网站</a>|
                    <!--激活状态span class添加 ActivationUnderline-->
                    <span class="underline <?php if($type == 1 or $type == 2): ?>ActivationUnderline<?php endif; ?>"></span>
                </li>
                <li>
                	<a id="NavWx">微信</a>|
                    <span class="underline <?php if($type == 3 or $type == 4): ?>ActivationUnderline<?php endif; ?>"></span>
                </li>
                <li>
                	<a href="<?php echo U('Index/Index/achievement', array('type'=>5));?>" class="NavApp">APP</a>|
                    <span class="underline <?php if($type == 5): ?>ActivationUnderline<?php endif; ?>"></span>
                </li>
                <li>
                	<a href="<?php echo U('Index/Index/achievement', array('type'=>6));?>" class="NavApp">代运营</a>|
                    <span class="underline <?php if($type == 6): ?>ActivationUnderline<?php endif; ?>"></span>
                </li>
                <li>
                	<a href="<?php echo U('Index/Index/achievement', array('type'=>7));?>" class="NavApp">其他</a>
                    <span class="underline <?php if($type == 7): ?>ActivationUnderline<?php endif; ?>"></span>
                </li>
                <!--激活状态添加 style="display: block;"-->
              <div class="CaseShownavSecond" <?php if($type == 1 or $type == 2): ?>style="display: block;"<?php endif; ?>>
                	<!--激活状态a class添加 ActivationA-->
            		<a href="<?php echo U('Index/Index/achievement', array('type'=>1));?>" class="CaseShownavA <?php if($type == 1): ?>ActivationA<?php endif; ?>">官网</a>|
                	<a href="<?php echo U('Index/Index/achievement', array('type'=>2));?>" class="CaseShownavA <?php if($type == 2): ?>ActivationA<?php endif; ?>">商城</a>
            	</div>
              <div class="CaseShownavSecondone" <?php if($type == 3 or $type == 4): ?>style="display: block;"<?php endif; ?>>
            		<a href="<?php echo U('Index/Index/achievement', array('type'=>3));?>" class="CaseShownavA <?php if($type == 3): ?>ActivationA<?php endif; ?>">平台</a>|
                	<a href="<?php echo U('Index/Index/achievement', array('type'=>4));?>" class="CaseShownavA <?php if($type == 4): ?>ActivationA<?php endif; ?>">活动</a>
            	</div>
            </ul>
        </div>
        <div class="CaseShowImg">
            <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--带二维码去掉的 class里的grow-->
                <a <?php if($type != 3 and $type != 4): ?>href="<?php echo ($vo['url']); ?>"<?php endif; ?>>
                    <div class="CaseShowImgbox grow">
                        <div class="CaseShowLogo">
                            <img src="__PUBLIC__/Uploads/img/<?php echo ($vo['img']); ?>" alt="<?php echo ($vo['img']); ?>"/>
                            <!--下方hover二维码分类显示添加-->
                            <?php if($type == 3 or $type == 4): ?><div class="CaseShowLogoQr">
                                    <img src="__PUBLIC__/Uploads/erweima/<?php echo ($vo['erweima']); ?>" alt="<?php echo ($vo['img']); ?>"/>
                                </div><?php endif; ?>
                        </div>
                        <div class="CaseShowText"><?php echo ($vo['name']); ?></div>
                    </div>
                </a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="Page">
        <?php echo ($page); ?>
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