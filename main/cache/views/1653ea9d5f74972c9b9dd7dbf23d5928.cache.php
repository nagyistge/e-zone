<?php include $this->_include('header'); ?>
    <div class="navigation">
    您当前位置：<a  href="<?php echo SITE_PATH; ?>">首页</a> >> TAG：<?php echo $kw; ?>
    </div>
    <div class="blank10 clear"></div>
    <div class="mainpdbox">
        <div class="left">
            <!--list begin-->
		    <div class="newslist">
                <h3><?php echo $kw; ?></h3> 	
			    <ul class="noborder">
                <?php if (is_array($taglist)) { $count=count($taglist);foreach ($taglist as $key=>$t) { ?>
                <li><span class="date"><?php echo date("Y-m-d", $t['updatetime']); ?></span> <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php if (($key+1)%5==0) { ?><li class="page-list" style="background:none"></li><?php } ?><!--每5行加一段分行代码-->
                <?php } } ?>
                </ul>
                <div class="listpage" style="padding-left:10px;"><?php echo $tagpage; ?></div>
		   </div>
	       <!--list end-->
        </div>
        <div class="right">
            <!--right02 begin-->
	        <div class="right02">
		        <div class="title"><span>最新TOP10</span></div>
		        <div class="right02box">
		        <ul>
                <?php $return = $this->_listdata("num=10 order=updatetime cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
			    <li><span class="N<?php echo $key+1; ?>"></span><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
			    </ul>
		        </div>
		    </div> 
	        <!--right02 end-->
		    <div class="blank10 clear"></div>
	        <!--right02 begin-->
	        <div class="right02">
		       <div class="title"><span>热点TOP10</span></div>
		       <div class="right02box">
		        <ul>
                <?php $return = $this->_listdata("num=10 order=hits cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
			    <li><span class="N<?php echo $key+1; ?>"></span><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
			    </ul>
		       </div>
		    </div> 
	        <!--right02 end-->
       </div>
    </div>
    <div class="clear blank10"></div>
<?php include $this->_include('footer'); ?>