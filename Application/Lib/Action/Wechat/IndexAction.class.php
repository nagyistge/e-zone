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

	public function achievement() {
		$this->display();
	｝
}
?>
