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
						<th width="300"><?php echo lang('a-con-25'); ?>： </th>
						<td>
						<select name="catid">
						<option value="0"><?php echo lang('a-con-55'); ?></option>
						<?php echo $category_select; ?>
						</select>
						</td>
					</tr>
					<?php if ($a=='show') { ?>
					<tr>
						<th><?php echo lang('a-mod-147'); ?>：</th>
						<td>
						<input type="radio" value="0" name="totime" checked /> <?php echo lang('a-mod-148'); ?>&nbsp;&nbsp;
						<input type="radio" value="1" name="totime" /> <?php echo lang('a-mod-149'); ?>&nbsp;&nbsp;
						<input type="radio" value="3" name="totime" /> <?php echo lang('a-mod-150'); ?>&nbsp;&nbsp;
						<input type="radio" value="7" name="totime" /> <?php echo lang('a-mod-151'); ?>&nbsp;&nbsp;
						</td>
					</tr>
					<?php } ?>
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