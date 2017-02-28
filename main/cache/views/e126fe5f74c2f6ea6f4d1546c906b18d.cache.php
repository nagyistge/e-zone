<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="table-list">
		<div class="pad-10">
			<div class="col-tab">
				<div class="explain-col mb10">
					<?php if ($ck_ob) { ?>
					<font color="red"><?php echo lang('a-con-116'); ?></font>
					<?php }  if ($check) { ?>
					<font color="red"><?php echo lang('a-con-117', array('1'=>APP_ROOT, '2'=>$check)); ?></font>
					<?php } else {  echo lang('a-con-118');  } ?>
				</div>
				<div class="contentList pad-10">
					<form action="" method="post" target='result' style="margin-bottom:20px;">
					<table width="100%" class="table_form">
					<tr>
						<th width="300"><?php echo lang('a-cat-107'); ?>： </th>
						<td>
						<select name="mid">
						<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
						<option value="<?php echo $t['modelid']; ?>"><?php echo $t['modelname']; ?></option>
						<?php } } ?>
						</select>
						</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td><input class="button" type="submit" name="submit" value="<?php echo lang('a-con-58'); ?>" /></td>
					</tr>
					<tr>
						<th style="text-align:left;"><b><?php echo lang('a-con-57'); ?></b></th>
						<td>&nbsp;</td>
					</tr>
					</table>
					</form>
					<iframe name="result" frameborder="0" id="result" width="100%" height="200"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>