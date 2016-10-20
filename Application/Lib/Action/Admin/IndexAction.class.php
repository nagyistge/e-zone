<?php
class IndexAction extends PublicAction {

	private $_indexModel = '';		
	/**
	 * 实例化模板
	 * author:yuboyue 2016/10/16 8:00
	 */
	function _initialize() {		//实例化模板变量
		parent::_initialize ();
		$this->_indexModel = D('Index');   //D函数链接后台index模板变量
	}

	/**
	 * shouye
	 */
	public function index() {
		$result = $this->_indexModel->selectDataByWhere();
		$classification = $this->_indexModel->getClassification();
		foreach ($result as $key => $value) {
			$result[$key]['showClass'] = $classification[$value['classification']];
		}
		$this->assign('result', $result);
		$this->display();
	}
	
	/**
	 * 编辑
	 */
	public function edit() {            //编辑的方法
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;       //判断id是否有值，如果有值给它取整，如果没值，返回0
		$where = array();						//定义一个数组
		$where['id'] = $id;					//将变量id的值传给数组
		$result = $this->_indexModel->findDataByWhere($where);        //从数组中找到的值传给result变量
		$this->assign('result', $result);       //将result这个变量传给页面中result这个变量
		$this->assign('classification', $this->_indexModel->getClassification());
		$this->display();
	}

	/**
	 * 删除
	 */
	public function delete() {           //删除的方法
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;      
		if(!$id) {					//id不存在，将返回错误‘fail’
			$this->error('id不存在');
		}
		$where = array();
		$where['id'] = $id;
		$result = $this->_indexModel->deleteDataBywhere($where);
		//从数组中找到的id值，将它删除
		if(!$result) {               //如果数组中没有这个值，将执行错误，输出fail，并退出
			$this->error('删除失败');
			exit;
 		}
		$this->success('删除成功', U('Admin/Index/index'));
		//否则删除成功，并跳转到后台的前端页面
	}

	/**
	 * 添加
	 */
	public function addData() {        //添加数据的方法
		$id   = isset($_POST['id']) ? intval($_POST['id']) : 0;
		$name = isset($_POST['name']) ? trim($_POST['name']) : '';
		$classification = isset($_POST['classification']) ? trim($_POST['classification']) : '';
		$url  = isset($_POST['url']) ? trim($_POST['url']) : '';

		$where = array();
		$where['id'] = $id;         //定义数组存储id值
		$params = array();
		$params['name'] = $name;     //定义name数组
		if($_FILES['img']["name"]) {
			$uploadImg = $this->upload('./Public/Uploads/img/', $_FILES['img']);
			if($uploadImg) {						
				$img = $uploadImg[0]['savename'];   //?
			}
			$params['img'] = $img;				//定义img数组
		}
		if($_FILES['erweima']["name"]) {
			$uploadImg = $this->upload('./Public/Uploads/erweima/', $_FILES['erweima']);
			if($uploadImg) {						
				$erweima = $uploadImg[0]['savename'];
			}
			$params['erweima'] = $erweima;
		}
		$params['classification'] = $classification;
		$params['url'] = $url;			//定义url数组
		$params['ctime'] = time();			//定义时间戳数组
		$params['ctime_date'] = date('Y-m-d H:i:s', time());   //定义当前时间数组
		if(!$id) {						//变量id没值
			$result = $this->_indexModel->addData($params);   //将params变量中的值添加进去
		} else {
			$result = $this->_indexModel->saveData($params, $where);  //将变量保存在数组中
		}
		if(!$result) {						//添加失败执行error中的代码，并退出
			$this->error('操作失败');
			exit;
		}
		$this->success('操作成功', U('Admin/Index/index'));      //添加成功，跳转到后台的前端页面
	}
}