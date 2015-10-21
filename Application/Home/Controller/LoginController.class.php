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
        if (!in_array(strtolower(I('ctl')), ['login', 'regist'])) {
            $ctl = I('ctl') ? I('ctl') : 'Index';
            $act = I('act') ? I('act') : 'index';
            $this->back = U($ctl.'/'.$act);
        }
        $this->display();
	}

	//登陆数据处理
	public function handle() 
	{
        
        if (!IS_AJAX) $this->error('非法操作');
        $phone  = I('phone', 0, 'trim');
        $pwd    = I('password', '', 'md5');
      
        if (!$phone || !$pwd ) {
            echo json_encode(['status' => 0, 'msg' => '手机号及密码不能为空']);
            exit;
        }
        $user = M('User')->where(['phone' => $phone])->find();
        if (!$user) {
            echo json_encode(['status' => 0, 'msg' => '账号不存在']);
            exit;
        }

        if (!$user['status']) {
            echo json_encode(['status' => 0, 'msg' => '账号已被锁定']);
            exit;
        }
        if ($user['password'] != $pwd) {
            echo json_encode(['status' => 0, 'msg' => '密码错误']);
            exit;
        }
        //数据检测通过
        $data = [
            'last_login_time' => $_SERVER['REQUEST_TIME'],
            'last_login_ip'   => ip2long(get_client_ip())
        ];
       
        M('user')->where(['id' => $user['id']])->save($data);
        $session = session('home');
        $session[C('USER_AUTH_KEY')] = $user['id'];
        $session['phone'] = $user['phone'];
        session('home', $session);
        //页面跳转
        $jumpUrl = I('back') ? I('back') : U('Index/index');
        echo json_encode(['status' => 1, 'msg' => '登陆成功', 'jumpUrl' => $jumpUrl]);
    }
}