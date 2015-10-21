<?php
namespace Home\Controller;
use Think\Controller;
class RegistController extends Controller {
    
    public function index(){
    	$this->display();
    }

    public function handle() {
    	if (!IS_AJAX) $this->error('非法操作');
    	$phone = trim(I('phone'));
    	$verify = I('verify', 0, 'trim');
    	$password = I('password');
    	$repassword = I('password');
    	$model = M('User');
    	$session = session('verify');
    	if (!$phone) {
    		echo json_encode(['status' => 0, 'msg' => '请输入手机号码']);
    		exit;
    	}

    	if ($phone != $session['phone'] || $verify != $session['code']) {
    		echo json_encode(['status' => 0, 'msg' => '验证码错误']);
    		exit;
    	}
    	if (!$password) {
    		echo json_encode(['status' => 0, 'msg' => '请输入密码']);
    		exit;
    	}
    	if ($password != $repassword) {
    		echo json_encode(['status' => 0, 'msg' => '两次密码输入不一致']);
    		exit;
    	}
    	if ($model->where(['phone' => $phone])->getField('id')) {
    		echo json_encode(['status' => 0, 'msg' => '手机号已被注册']);
    		exit;
    	}
    	$rs = $model->add(['phone' => $phone, 'password' => md5($password), 'createe_at' => time(), 'status' => 1]);
    	if ($rs) {
    		echo json_encode(['status' => 1, 'msg' => '注册成功,即将跳转到登陆页~', 'jumpUrl' => U('Login/index')]);
    	} else {
    		echo json_encode(['status' => 0, 'msg' => '系统繁忙，请稍后再试~']);
    	}
    }

     /**
	 *  异步发送验证码
	 * @return [type] [description]
	 */
	public function verify() {
        if (!IS_AJAX) $this->error('非法操作');
        $phone = I('phone');
        if (!$phone) {
                echo '请输入电话号码...';
                exit;
        }
        import("Common.Util.Util");
        $num = rand(1000, 9999);
        $result = \Util::sendSMS ($phone, '您的验证码是：'.$num.'。请不要把验证码泄露给其他人。' );
        session('verify', ['code' => $num, 'phone' => $phone]);
        echo $result ['SubmitResult'] ['msg'];
	}
}