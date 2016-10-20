<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="renderer" content="webkit">
		<title>亿众互动</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link href="__PUBLIC__/Resources/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
		<link href="__PUBLIC__/Resources/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
		<link href="__PUBLIC__/Resources/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
		<link href="__PUBLIC__/Resources/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
		<link href="__PUBLIC__/Resources/css/animate.css" rel="stylesheet">
		<link href="__PUBLIC__/Resources/css/style.css?v=2.2.0" rel="stylesheet"></head>
		<link href="__PUBLIC__/Resources/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
		<link href="__PUBLIC__/Resources/css/plugins/iCheck/custom.css" rel="stylesheet">
		<!-- Mainly scripts -->
		<script src="__PUBLIC__/Resources/js/jquery-2.1.1.min.js"></script>
		<script src="__PUBLIC__/Resources/js/bootstrap.min.js?v=3.4.0"></script>
		<script src="__PUBLIC__/Resources/js/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="__PUBLIC__/Resources/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<!-- Custom and plugin javascript -->
		<script src="__PUBLIC__/Resources/js/hplus.js?v=2.2.0"></script>
		<script src="__PUBLIC__/Resources/js/plugins/pace/pace.min.js"></script>
		<script src="__PUBLIC__/Resources/js/plugins/iCheck/icheck.min.js"></script>
		<!-- Data Tables -->
		<script src="__PUBLIC__/Resources/js/plugins/dataTables/jquery.dataTables.js"></script>
    	<script src="__PUBLIC__/Resources/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    	<script src="__PUBLIC__/Resources/js/plugins/jeditable/jquery.jeditable.js"></script>
    	<!-- jQuery Validation plugin javascript-->
	    <script src="__PUBLIC__/Resources/js/plugins/validate/jquery.validate.min.js"></script>
	    <script src="__PUBLIC__/Resources/js/plugins/validate/messages_zh.min.js"></script>
	    <script>
	        //以下为修改jQuery Validation插件兼容Bootstrap的方法，没有直接写在插件中是为了便于插件升级
	        $.validator.setDefaults({
	            highlight: function (element) {
	                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
	            },
	            success: function (element) {
	                element.closest('.form-group').removeClass('has-error').addClass('has-success');
	            },
	            errorElement: "span",
	            errorClass: "help-block m-b-none",
	            validClass: "help-block m-b-none"
	        });
	    </script>
    	
	<body>
<div id="wrapper">
	<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
						<span class="clear">
							<span class="block m-t-xs">
								<strong class="font-bold"><?php echo ($userAdmin); ?></strong>
							</span>
							<span class="text-muted text-xs block">管理员
								<b class="caret"></b>
							</span>
						</span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li>
							<a href="<?php echo U('Admin/Login/repwd');?>">修改密码</a>
						</li>
						<li>
							<a href="<?php echo U('Admin/Login/logout');?>">安全退出</a>
						</li>
					</ul>
				</div>
			</li>

			<li class='active'>
				<a href="#">
					<i class="fa fa-bar-chart-o"></i>
					<span class="nav-label">素材管理</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level">
					<li class='active'>
						<a href="<?php echo U('Admin/Index/index');?>">素材列表</a>
					</li>
				</ul>
			</li>

		</ul>
	</div>
</nav>
	<div id="page-wrapper" class="gray-bg dashbard-1">
		<div class="row border-bottom">
	<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<ul class="nav navbar-top-links navbar-right">
			<li>
				<span class="m-r-sm text-muted welcome-message">
					<a href="<?php echo U('Admin/Index/index');?>" title="返回首页">
						<i class="fa fa-home"></i>
					</a><?php echo ($userAdmin); ?> 欢迎使用亿众互动后台管理</span>
			</li>
			<li>
				<a href="<?php echo U('Admin/Login/logout');?>">
					<i class="fa fa-sign-out"></i>退出</a>
			</li>
		</ul>
	</nav>
</div>
		<div class="row">
			<div class="wrapper wrapper-content animated fadeInRight">
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins">
							<div class="ibox-content">
								<div class="panel-title m-b-md">
									<h4>
										素材列表
									</h4>
								</div>
								<a href="<?php echo U('Admin/Index/edit');?>">
									<button type="button" class="btn btn-primary">新建素材</button>
								</a>
								<table class="table table-striped table-bordered table-hover dataTables-example">
									<thead>
										<tr>
											<th>ID</th>
											<th>名称</th>
											<th>分类</th>
											<th>图片</th>
											<th>二维码</th>
											<th>链接</th>
											<th style="background:#fff;">操作</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeX">
												<td><?php echo ($vo['id']); ?></td>
												<td><?php echo ($vo['name']); ?></td>
												<td><?php echo ($vo['showClass']); ?></td>
												<td>
													<img src="__PUBLIC__/Uploads/img/<?php echo ($vo['img']); ?>" style="width: 200px;">
												</td>
												<td>
													<?php if($vo['erweima']): ?><img src="__PUBLIC__/Uploads/erweima/<?php echo ($vo['erweima']); ?>" style="width: 200px;"><?php endif; ?>
												</td>
												<td><?php echo ($vo['url']); ?></td>
												<td class="center">
													<a href="<?php echo U('Admin/Index/edit', array('id'=>$vo['id']));?>">
														<button type="button" class="btn btn-primary btn-xs">编辑</button>
													</a>
<!-- 													<a href="<?php echo U('Admin/Index/delete', array('id'=>$vo['id']));?>">
														
													</a> -->
													<button type="button" class="btn btn-primary btn-xs" onclick="deleteData(<?php echo ($vo['id']); ?>);">删除</button>
												</td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
	<div class="pull-right">
		北京融媒互动信息技术有限公司 京ICP备16046790号-2
	</div>
	<div>
		<strong>Copyright</strong> &copy; 2016
	</div>
</div>

		</div>
	</div>
</div>
<!-- Page-Level Scripts -->
<script>
	$(document).ready(function () {
		$('.dataTables-example').dataTable({
			"aoColumnDefs": [{"bSortable":false,"aTargets":[4]}]
		});
	});
	function deleteData(id) {
		var id = parseInt(id);
		if(confirm("是否删除？")) {
			window.location.href = "<?php echo U('Admin/Index/delete');?>?id=" + id;
		}
	}
</script>
	</body>
</html>