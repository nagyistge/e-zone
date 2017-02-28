<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once FCPATH.'dayrui/core/A_Model.php';

class Mbak_model extends A_Model {

	/*
	 * 应用基础模型类（必须继承A_Model应用类）
	 */
    public function __construct() {
        parent::__construct();
    }
	
	/**
	 * 将应用菜单安装至后台菜单中
	 *
	 * @param	string	$dir	应用目录名称
	 * @param	intval	$id		应用id
	 * @return  void
	 */
	public function install_admin_menu($dir, $id) {
		
		$config = require(FCPATH.'app/'.$dir.'/config/app.php');
		
		// 安装至后台菜单
		$this->db->insert('admin_menu', array(
			'pid' => 75,
			'uri' => $dir.'/admin/content/index',
			'mark' => 'app-'.$dir,
			'name' => $config['name'],
			'displayorder' => (int)$id+1,
		));
		
	}
	
}