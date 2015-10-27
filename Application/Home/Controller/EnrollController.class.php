<?php
namespace Home\Controller;
class EnrollController extends BaseController {
	public function _initialize() {
		parent::_initialize();
		$this->checkLogin();
	}
    public function index(){
        
        $uid = $_SESSION['home'][C('USER_AUTH_KEY')];
        $this->number =  sprintf("%05d", $uid);
        $this->type = M("Type")->where(['status' => 1])->order('sort asc')->field('id, name')->select();
    	$this->display();
    }

    public function handle() {

    	if (!IS_AJAX) $this->error('非法操作');
        $Model = M('Match');
        $Model->create();
        $Model->create_at = $_SERVER['REQUEST_TIME'];
        if ($Model->team_nature == 2) 
            $Model->address = I('location_p') .  ' ' . I('location_c') . ' ' .I('location_a');

        //检查数据
        if ($Model->where(['number' => $Model->number])->getField('id')) {
            echo json_encode(['status' => 0, 'msg' => '您已报名，请不要重复提交~']);
            exit;
        }

        if ($Model->add()) {
            echo json_encode(['status' => 1, 'msg' => '提交成功，请等待管理员审核~', 'jumpUrl' => U('Index/index')]);
            exit;
        } else {
            echo json_encode(['status' => 0, 'msg' => '系统繁忙，请稍后重试~']);
            exit;
        }
    }
}