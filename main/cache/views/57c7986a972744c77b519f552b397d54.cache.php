<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
<link href="<?php echo ADMIN_THEME?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME?>js/jquery.min.js"></script>
</head>
<body>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
	<a href="<?php echo purl('content/updateurl'); ?>" class="on"><em><?php echo lang('a-men-35'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" target='result' style="margin-bottom:20px;">
		<table width="100%" class="table_form">
		<tr>
			<th width="300"><?php echo lang('a-con-25'); ?>： </th>
			<td>
			<select name="catids[]" style="width:200px;" size=12 multiple>
				<option value="0"><?php echo lang('a-con-55'); ?>......</option>
				<?php echo $category; ?>
			</select>
			<div class="onShow"><?php echo lang('a-cat-89'); ?></div>
			</td>
		</tr>
		<tr>
			<th><?php echo lang('a-con-56'); ?>： </th>
			<td><input type="text" class="input-text" size="10" value="100" name="nums"></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td style="padding-left:10px;"><input class="button" type="submit" name="submit" value="<?php echo lang('a-con-58'); ?>" /></td>
		</tr>
		<tr>
			<th style="text-align:left;"><b><?php echo lang('a-con-57'); ?></b></th>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td style="padding-left:2px;"><iframe name="result" frameborder="0" id="result" width="100%" height="30"></iframe></td>
		</tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>
