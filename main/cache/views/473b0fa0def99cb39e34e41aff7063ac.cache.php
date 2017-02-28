<?php include $this->_include('header'); ?>
    <div class="navigation">
    您当前位置：<a  href="<?php echo SITE_PATH; ?>">首页</a> >> 关键词
    </div>
    <div class="blank10 clear"></div>
    <div class="mapmain">
        <div class="tit"><h2>关键词</h2></div>
	    <div class="mapbox">
	        <div class='maplist'>
			<?php if (is_array($keyword)) { $count=count($keyword);foreach ($keyword as $t) { ?>
			<span><a href="<?php echo tag_url($t['name']); ?>"><?php echo $t['name']; ?></a></span>
			<?php } } ?>
		    </div>
		</div>
	</div>
    <div class="clear blank10"></div>
<?php include $this->_include('footer'); ?>