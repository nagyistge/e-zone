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
    
	
}
?>
