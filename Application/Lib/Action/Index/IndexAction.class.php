<?php
	class IndexAction extends Action {

		private $_indexModel = '';
		private $_showNum = 2;

		public function __construct() {
			parent::__construct();
			$this->_indexModel = D('Admin/Index');
		}

		public function index() {
			
			$this->assign('d_selected', 'home');
			$this->display();
		}

		public function service() {
			
			$this->assign('d_selected', 'service');
			$this->assign('title', '我们的服务');
			$this->display();
		}

		public function achievement() {
			
			
			$p = isset($_GET['p']) ? intval($_GET['p']) : 1;
			$type = isset($_GET['type']) ? intval($_GET['type']) : 1;

			$limit = ($p - 1) * $this->_showNum .",". $this->_showNum;
			
			$result = $this->_indexModel->selectDataByWhere(['classification' => $type], '', $limit);
			$count = $this->_indexModel->selectCountDataByWhere(['classification' => $type]);

			$pageShow = '<div class="paging-nav">';
			if($p > 1) {
				$pageShow .= '<a href="'.$this->setUrl($p - 1, $type).'">上一页</a>';
			}
			$pageCount = $count / $this->_showNum;
			for ($i = 1; $i <= ceil($pageCount); $i++) {
				if($i == $p) {
					$pageShow .= '<a class="color" href="'.$this->setUrl($i, $type).'">'.$i.'</a>';
				} else {
					$pageShow .= '<a href="'.$this->setUrl($i, $type).'">'.$i.'</a>';
				}
			}
			if($p < ceil($pageCount)) {
				$pageShow .= '<a href="'.$this->setUrl($p + 1, $type).'">下一页</a>';
			}
			$pageShow .= '</div>';

			$this->assign('d_selected', 'achievement');
			$this->assign('title', '我们的成绩');
			$this->assign('type', $type);
			$this->assign('result', $result);
			$this->assign('page', $pageShow);
			$this->display();
		}

		public function setUrl($p = 1, $type = 1) {
			$urlWhere = [];
			$urlWhere['p'] = $p;
			$urlWhere['type'] = $type;
			return U('Index/Index/achievement', $urlWhere);
		}

		public function aboutUs() {
			
			$this->assign('d_selected', 'about');
			$this->assign('title',"关于亿众");
			$this->display();
		}

		public function contact() {
			
			$this->assign('d_selected', 'contact');
			$this->assign('title', "联系我们");
			$this->display();
		}

		public function culture() {
			$this->assign('d_selected', 'about');
			$this->assign('title',"亿众文化");
			$this->display();
		}

		public function  course() {
			$this->assign('d_selected', 'about');
			$this->assign('title',"亿众历程");
			$this->display();
		}

		public function  team() {
			$this->assign('d_selected', 'develop');
			$this->assign('title',"亿众团队");
			$this->display();
		}

		public function  advertise() {
			$this->assign('d_selected', 'develop');
			$this->assign('title',"招聘信息");
			$this->display();
		}
	}
?>