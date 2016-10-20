<?php
class LoginModel extends Model {
 /**
  * 模板
  * author:yuboyue 2016/10/16 8:00
  */
	private $_model = '';

	public function __construct() {             //构造函数
		parent::__construct ();                 //父类的构造函数
		$this->_model = M('admin');             //连接控制器
	}

	public function userLogin($username, $password) {
		//定义用户登录的一个方法，传进两个参数，一个是用户名，一个是密码
		$where ["username"] = $username;				//以username为键值的数组
		$where ["password"] = md5 ( $password );			//对密码进行加密操作，并传进数组
		$result = $this->_model->where ( $where )->find ();   //根据where条件，取值Admin
		if(!$result) {
			return false;
		}
		return $result;
	}
	public function repwd($id, $password) {
		$where = array();
		$where['id'] = $id;
		$params = array();
		$params['password'] = md5($password);
		$result = $this->_model->where($where)->save($params);
		if(!$result) {
			return false;
		} 
		return $result;
 	}
}
?>
