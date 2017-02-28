    <!--底部信息-->
    <div class="copyright">
        <div class="foot">
        <a href="<?php echo SITE_PATH; ?>">首页</a>
		<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) { ?>
		<a href="<?php echo $t['url']; ?>"><?php echo $t['catname']; ?></a>
		<?php }  } } ?>
		<a href="<?php echo url('member'); ?>">会员中心</a>
		
        </div>  
        <div id="copyright">Powered by 众众网络 © 2015,Processed in <?php echo runtime(); ?> second(s).</div> 
    </div>
</div>
<!--wrap end-->
</body>
</html>