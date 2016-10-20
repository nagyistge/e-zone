<?php
class IndexModel extends Model {
 /**
  * 模板
  * author:yuboyue 2016/10/16 8:00
  */
	private $_model = '';

	public $_classification = array(
		1 => 'pc官网',
		2 => 'pc商城',
		3 => '微信平台',
		4 => '微信活动',
		5 => 'APP',
		6 => '代运营',
		7 => '其他',
	);

	public function __construct() {        //构造函数  
		parent::__construct ();            //父类的构造函数
		$this->_model = M('material');     //连接数据表material
	}

	/**
	 * 根据条件获取多条数据
	 */
	public function selectDataByWhere($where = [], $order = 'id desc', $limit = '') {
		$result = $this->_model->where($where)->order($order)->limit($limit)->select();            //根据条件，排序，限制，选取多条数据
		if(!$result) {
			return false;
		}
		return $result;
	}

	/**
	 * 获取总数
	 */
	public function selectCountDataByWhere($where = []) {
		$result = $this->_model->where($where)->count();
		if(!$result) {
			return false;
		}
		return $result;
	}

	/**
	 * 根据条件获取单条数据
	 */
	public function findDataByWhere($where = [], $order='', $limit='') {
		$result = $this->_model->where($where)->order($order)->limit($limit)->find();        
		if(!$result) {                          
			return false;
		}
		return $result;                      
	}

	/**
	 * 根据条件删除数据
	 */
	public function deleteDataBywhere($where) {
		$result = $this->_model->where($where)->delete();
		if(!$result) {
			return false;
		}
		return $result;
	}

	/**
	 * 根据条件添加数据
	 */
	public function addData($params = []) {
		$result = $this->_model->add($params);
		if(!$result) {
			return false;
		}
		return $result;
	}

	/**
	 * 根据条件保存数据
	 */
	public function saveData($params = [], $where = []) {
		$result = $this->_model->where($where)->save($params);
		if(!$result) {
			return false;
		}
		return $result;
	}

	public function getClassification() {
		return $this->_classification;
	}

}