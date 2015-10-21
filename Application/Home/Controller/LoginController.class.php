<?php

namespace Home\Controller;

/**
 * 用户登陆控制器
 * @author yuwei
 * @date 2015-10-21
 */
class LoginController extends BaseController
{

	//登陆页视图
	public function index()
	{
		$this->display();
	}

	//登陆数据处理
	public function handle() 
	{
        
        $login  = I('login', '', 'trim');
        $pwd    = I('password', '', 'md5');
        $role   = I('role', 0, 'intval');
        $verify = I('verify');
      
        if (!$login || !$pwd || !$verify) $this->error('用户名、密码及验证码不能为空！');
        $user = M('User')->where(['login' => $login, 'role' => $role, 'site_id' => $this->_siteInfo['id']])->field('id, login, password, status')->find();
        if (!$user) $this->error('账户不存在');
        if ($user['password'] != $pwd) $this->error('密码错误');
        if (!$user['status']) $this->error('账号已被锁定');
        if ($verify != session('verify')) $this->error('验证码错误');
        //数据检测通过
        $data = [
            'last_login_time' => $_SERVER['REQUEST_TIME'],
            'last_login_ip'   => get_client_ip()
        ];
       
        M('user')->where(['id' => $user['id']])->save($data);
        
        //登陆状态写入到session
        switch ($role) {
			case 20:
				$key = 'MD_AUTH_KEY';
				break;
			case 30:
				$key = 'DC_AUTH_KEY';
				break;
			case 40:
				$key = 'RC_AUTH_KEY';
				break;
			default:
				$this->error('非法操作');
				break;
		}
        session(C($key), $user['id']);
        session('login', $user['login']);
        
        //页面跳转
        if (session('jumpUrl')) {
            header('location:'.session('jumpUrl'));
        } else {
            $this->redirect('Index/index');
        }
    }
}