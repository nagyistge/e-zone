<?php
/**
 * 实例化模板
 * author:yuboyue 2016/10/16 8:00
 */
class PublicAction extends Action {       //公共的控制器

	function _initialize() {          //初始化
		if(!$_SESSION["userInfo"]) {       //用户信息传进session数组，如果没有值，跳转后台页面并退出
			$this->redirect("Admin/Login/index");exit;
		} else {               //否则，将用户信息从session取出，并显示给后台页面
			$userAdmin = $_SESSION["userInfo"];
			$this->assign('userAdmin', $userAdmin['username']);
		}
	}

	public function upload($path = '', $file) {
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile (); // 实例化上传类
		$upload->maxSize = 3145728; // 设置附件上传大小
		$upload->allowExts = array (
				'jpg',
				'gif',
				'png',
				'jpeg'
		); // 设置附件上传类型
		$upload->savePath = $path; // 设置附件上传目录
		$info = $upload->uploadOne ($file);
		if (!$info) { // 上传错误提示错误信息
			$this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			return $info;
		}
		return false;
	}
}