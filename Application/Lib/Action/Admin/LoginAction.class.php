<?php
class LoginAction extends Action {     //登录的控制器继承控制器这个类

	/**
	 * 连接html
	 * author:yuboyue 2016/10/16 8:00
	 */
	private $_loginModel = '';	
	/**
	 * 初始化模板
	 */
	function _initialize() {		//实例化模板变量
		$this->_loginModel = D('Login');  //D函数链接后台Login模板变量
	}

	public function index() {
		$this->display();
	}


	/**
	 * 登录
	 */
	public function login() {
	       //登录的函数
		$result = $this->_loginModel->userLogin($_POST["username"], $_POST["password"]);    //调用userlogin方法，返回的数据传给result变量
		if(!$result) {							//变量为空，显示登录失败，跳转到后台Login的页面，并退出
			$this->error("登录失败",U("Admin/Login/index"));      
			exit();
		}
		$_SESSION["userInfo"] = $result;
		$this->success("登录成功",U("Admin/Index/index"));exit;      //登录成功，跳转到后台的Index前端页面,并退出
	}

	/**
	 * 退出
	 */
	public function logOut() {										//退出函数
		unset($_SESSION["userInfo"]);					//用户信息清空
		if(!isset($_SESSION["userInfo"]) || !$_SESSION["userInfo"]) {     //用户信息清空，返回成功，跳转到后台前端页面，并退出
			$this->success("成功",U("Admin/Index/index"));exit;
		}
	}
	public function repwd() {
		$this->display();
	}
	public function pwd() {
		$password = isset($_POST['pwd']) ? trim($_POST['pwd']) : '';
		$newpwd = isset($_POST['repwd']) ? trim($_POST['repwd']) : '';
		$id = isset($_SESSION['userInfo']['id']) ? intval($_SESSION['userInfo']['id']) : 0;
		if($id == 0) {
			$this->redirect('Admin/Index/index');
			return false;
		}
		if(!$password) {
			$this->error('请输入密码');
			return false;
		}
		if(!$newpwd) {
			$this->error('请再次输入密码');
			return false;
		}
		if($password != $newpwd) {
			$this->error('密码不一致，请重新输入');
			return false;
		}
		$result = $this->_loginModel->repwd($id, $password); 
		if (!$result) {
			$this->error('修改失败');
		}else {
			$this->success('成功', U('Admin/Index/index'));
		}
	}
}