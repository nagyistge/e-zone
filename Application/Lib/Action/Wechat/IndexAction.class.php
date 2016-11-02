<?php
class IndexAction extends Action {

	public function __construct() {
		parent::__construct();
		
	}

	/**
	 * 首页
	 */
	public function index() {
		
		$this->display();
	}
    
    /**
     *
     * 服务
     */
	public function service() {
		$this->display();
	}

	 /**
	  *
	  * 关于亿众
	  */
	 public function aboutUs() {	
		$this->display();
	}

	/**
	 * 联系我们
	 * @return [type] [description]
	 */
	public function contact() {	
			$this->display();
	}
	/**
	 * 职业发展
	 * @return [type] [description]
	 */
	public function  team() {		
			$this->display();
	}

	/**
	 * 我们的成绩
	 * @return [type] [description]
	 */
	public function achievement() {
		$type = isset($_GET['type']) ? intval($_GET['type']) : 1;
		$this->assign('type', $type);
		$this->display();
	}

	public function achievementData() {
		$type = isset($_GET['type']) ? intval($_GET['type']) : 1;
		$where = array();
		$where['classification'] = $type;
		$result = M('material')->where($where)->order('id desc')->select();
		$callback = [];
		foreach ($result as $key => $value) {
			$callback['lists'][$key]['pic'] = "http://".$_SERVER['HTTP_HOST']. "/Public/Uploads/img/" .$value['img'];
			$callback['lists'][$key]['link'] = $value['url'];
			if($type == 3 || $type == 4) {
				$callback['lists'][$key]['link'] = "http://".$_SERVER['HTTP_HOST']. "/Public/Uploads/erweima/" .$value['erweima'];
			}
		}
		echo !empty($callback) ? json_encode($callback) : '[]';
	}
	
}
?>
