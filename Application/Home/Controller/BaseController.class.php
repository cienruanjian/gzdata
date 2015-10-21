<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize() {

    }

    public function checkLogin() {
    	//检查用户是否已登录
        if (!$_SESSION['home'][C('USER_AUTH_KEY')]) {
            $this->redirect('Login/index',['ctl' => CONTROLLER_NAME, 'act' => ACTION_NAME]);
        }
    }
}