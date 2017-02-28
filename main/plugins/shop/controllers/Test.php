<?php

/**
 * CustomController.php 用户自定义控制器
 * 关于控制器的使用规则 http://bbs.finecms.net/forum.php?mod=viewthread&tid=45
 */

class Test extends Common {
    
    public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 示例控制器方法 test
	 * 访问地址 index.php?c=custom&a=test
	 * 调用地址 url('custom/test')
	 */
	public function index() {

	    /**
		 * --------------------------
		 *           程序区
		 * -------------------------
		 */
        echo APP::$namespace;
echo '.hehe';
	}
	
	
	
	
}