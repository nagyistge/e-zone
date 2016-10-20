<?php
/**
 * 资源管理
 * author:yuboyue 2016/10/16 8:00
 */
class ResourceAction extends PublicAction {    //资源控制器继承控制器

	function _initialize() {              //初始化
		parent::_initialize ();             
		$this->_imagesModel = D('');     //空模板
	}
	
	/**
	 * [addData 添加修改数据]
	 */
	public function addData() {         //添加数据
		$id = isset($_POST['id']) ? intval($_POST['id']) : 0;       //id如果有值，取整，没有返回0
		$url = isset($_POST['url']) ? trim($_POST['url']) : '';       //name如果有值，去掉空格，没有返回空
		
		$params = array();
		if(!$id) {
			$this->error('获取不到数据');exit;                 //如果id没有值，返回‘获取不到数据’，退出
		}
		if($url) {                                       
			$params['link'] = $url;                              //url传给以link为键值的数组
			$erweima = substr($this->qrcode($url,''), 1);                   //？
			$params['erweima'] = $erweima;                     
		}
		$success = false;                            
		foreach ($_FILES as $key => $value) {                //客户端取文件             
			if($value['name']) {                               
				$success = true;
			}
		}
		if($success) {                     //没取到文件
			$dataImg = $this->upload ();                //加载
			foreach ($_FILES as $key => $value) {              //遍历客户端文件
				foreach ($dataImg as $k => $v) {                  //遍历客户端图片文件
					if($value['name'] == $v['name']) {                
						$Iid = $this->_imagesModel->addDataByParams($dataImg[$k]);         //将找到的文件，添加给图片模板实例
						$params[$key] = $Iid;
					}
				}
			}
		}
		$result = M('order')->where(array('id'=>$id))->save($params);             
		$this->success('成功！', U('Admin/Resource/index', array('id'=>$id)));        //添加成功，跳转到index方法
	}

}