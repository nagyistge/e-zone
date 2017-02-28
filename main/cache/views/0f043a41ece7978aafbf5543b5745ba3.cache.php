<?php $meta_title="提示信息";  include $this->_include('header'); ?>
<style type="text/css">
<!--
.content{ 
    padding:46px 10px 10px 10px; font-size:14px; height:64px; text-align:center;
}
.bottom{
    background:#e4ecf7; margin: 0 1px 1px 1px;line-height:26px; *line-height:30px; height:26px; text-align:center
}
-->
</style>
    <div class="navigation">
    您当前位置：<a  href="<?php echo SITE_PATH; ?>">首页</a> >> 提示信息 
    </div>
    <div class="blank10 clear"></div>
    <!--begin-->
    <div class="piclist">
        <div class="title"><span>提示信息</span></div>
        <div class="item-list">
            <div class="content"><?php echo $msg; ?></div>
			<div class="bottom">
			<?php if ($url) { ?>
				<a href="<?php echo $url; ?>">如果您的浏览器没有自动跳转，请点击这里</a>
			<meta http-equiv="refresh" content="<?php echo $time; ?>; url=<?php echo $url; ?>">
			<?php } else {  if ($i) { ?><a href="javascript:history.back();" >[点这里返回上一页]</a><?php }  } ?> 
			</div>
        </div>
    </div>
    <!--end-->
    <div class="clear blank10"></div>
<?php include $this->_include('footer'); ?>