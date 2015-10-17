<?php
namespace Admin\Controller;
use Think\Controller;

/**
 *后台登陆控制器
 * @author yuwei
 *        
 */
class LoginController extends Controller {
    public function _initialize() {
      
        $this->titleL1 = "登陆";
    }
    
    //后台登陆视图页
    public function index () {
        $this->display();
    }
    
    //登陆数据处理
    public function handle () {
        $login  = I('login', '', 'trim');
        $pwd    = I('password', '', 'md5');
        if (!$login || !$pwd) $this->error('用户名和密码不能为空！');
        
        $admin = M('Admin')->where(array('login' => $login))->find();
        if (!$admin || $admin['password'] != $pwd) $this->error('账号或者密码错误');
        if (!$admin['status']) $this->error('账号已被锁定');
        
        //数据检测通过
        $data = array(
            'last_login_time' => $_SERVER['REQUEST_TIME'],
            'last_login_ip'   => ip2long(get_client_ip())
        );
        M('Admin')->where(array('id' => $admin['id']))->save($data);
        
        //登陆状态写入到session
        $session = array(
            C('USER_AUTH_KEY') => $admin['id'],
            'login'            => $admin['login'],
            'last_login_time'  => $admin['last_login_time'],
            'last_login_ip'    => $admin['last_login_ip'],
        );
        session('admin', $session);
       
        //页面跳转
        if (session('url')) {
            header('location:'.session('url'));
        } else {
            $this->redirect('Index/index');
        }
    }
    
    //退出登陆
    public function logout () {
        session_destroy();
        session_unset();
        $this->redirect(C('USER_AUTH_GATEWAY'));
    }
}

?>