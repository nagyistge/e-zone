<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(E_ALL);

if (isset($_COOKIE['canWrite']) && $_COOKIE['canWrite'] == 1) {
	redirect();
}
if ($_POST) {
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];
	if (!$name || !$mobile) {
		redirect();
	}
	$file_content = '姓名：' . $name . ' 电话：' . $mobile . ' 留言内容：' . $message . "\n";
	$log = iconv('UTF-8', 'GBK', $file_content);
	if (strlen($file_content) > 1000) {
		return;
	}
	
	$result = file_put_contents("message.txt", $file_content, FILE_APPEND);
	if ($result !== false) {
		setcookie('canWrite','1',time()+30);
	}
}
redirect();

function redirect() {
	$url = 'http://www.pjmishi.com/weixin';
	header('Location: ' . $url);
	exit;
}
?>