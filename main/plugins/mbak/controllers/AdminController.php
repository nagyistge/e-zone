<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


class AdminController extends Plugin {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {

        if (is_file(FCPATH.'plugins/mbak/name.php')) {
            require(FCPATH.'plugins/mbak/name.php');
        } else {
            $cname = 'ebak';
        }

        $this->template->assign(array(
            'murl' => SITE_URL.'plugins/mbak/'.$cname.'/',
        ));
        $this->template->display('index.html');
    }

    public function configAction() {

        $error = '';

        if (!$dir) {
            if (is_file(FCPATH.'plugins/mbak/name.php')) {
                require(FCPATH.'plugins/mbak/name.php');
                $name = $cname;
            } else {
                $name = 'ebak';
            }
            if (is_dir(FCPATH.'plugins/mbak/'.$name.'/')) {
                $dir = $name;
            } else {
                $dir = 'ebak';
            }
        } else {
            $dir = 'ebak';
        }

        if (IS_POST) {
            $name = $this->input->post('name');
            if (!$name || !preg_match('/^[a-z0-9]+$/iU', $name)) {
                $error = '目录名称【'.$name.'】格式不正确';
            } else {
                if (is_dir(FCPATH.'app/mbak/'.$name.'/')) {
                    $error = '此目录【'.$name.'】已经存在';
                } else {
                    if (@rename(FCPATH.'app/mbak/'.$dir.'/', FCPATH.'app/mbak/'.$name.'/')) {
                        file_put_contents(FCPATH.'app/mbak/name.php', "<?php".PHP_EOL.'$cname="'.$name.'";');
                        $this->admin_msg('重命名成功', $this->url('content/index'), 1);
                    } else {
                        $error = '目录重命名失败，请检查文件权限。';
                    }
                }
            }
            //
        }

        $this->template->assign('menu', $this->get_menu(array(
            '返回备份中心' => APP_DIR.'/admin/index',
            '安全设置' => APP_DIR.'/admin/config'
        )));
        $this->template->assign('dir', $dir);
        $this->template->assign('error', $error);
        $this->template->display('config.html');
    }
	

	
}
