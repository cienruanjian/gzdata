<?php
namespace Home\Controller;
class EnrollController extends BaseController {
	public function _initialize() {
		parent::_initialize();
		$this->checkLogin();
	}
    public function index(){
        
        $uid = $_SESSION['home'][C('USER_AUTH_KEY')];
        $number =  sprintf("%05d", $uid);
        $this->number = $number;
        $this->type = M("Type")->where(['status' => 1])->order('sort asc')->field('id, name')->select();
        //判断是否已报名
        $rs = M('Match')->where(['uid' => $uid])->getField('id');
        if ($rs) {
            $this->redirect('User/index');
        } else {
        	$this->display();
        }
    }

    public function handle() {
    	if (!IS_AJAX) $this->error('非法操作');
        $Model = M('Match');
        $Model->create();
        $uid = $_SESSION['home'][C('USER_AUTH_KEY')];
        $Model->uid = $uid;
        $Model->create_at = $_SERVER['REQUEST_TIME'];
        if ($Model->team_nature == 2) {
            $Model->address = I('location_p') .  ' ' . I('location_c') . ' ' .I('location_a');
            $Model->scale = I('scale_personal');
        }

        //检查数据
        if ($Model->where(['uid' => $uid])->getField('id')) {
            echo json_encode(['status' => 0, 'msg' => '您已报名，请不要重复提交~']);
            exit;
        }

        //项目负责人身份证
        if ($Model->where(['duty_id' => $Model->duty_id])->getField('id')) {
            echo json_encode(['status' => 0, 'msg' => '项目负责人身份证已存在，不能重复报名']);
            exit;
        }

        if ($Model->add()) {
            echo json_encode(['status' => 1, 'msg' => '提交成功，请等待管理员审核~', 'jumpUrl' => U('Enroll/index')]);
            exit;
        } else {
            echo json_encode(['status' => 0, 'msg' => '系统繁忙，请稍后重试~']);
            exit;
        }
    }

    public function edit() {
        $uid = $_SESSION['home'][C('USER_AUTH_KEY')];
        $this->type = M("Type")->where(['status' => 1])->order('sort asc')->field('id, name')->select();
        //判断是否已报名
        $data = M('Match')->where(['uid' => $uid])->find();
        if ($data) {
            $this->data = $data;
            $this->display();
        } else {
            $this->redirect('Enroll/index');
        }
    }

    public function editHandle() {
        $Model = M('Match');
        $where = ['uid' => $_SESSION['home'][C('USER_AUTH_KEY')]];
        $data  = $Model->where($where)->find();
        $Model->create();
        if (!$data) {
            echo json_encode(['status' => 0, 'msg' => '修改失败，报名数据不存在或已被删除！']);
            exit;
        }
        if ($data['update_number'] >= C('ALLOW_UPDATE_TIME') ) {
            echo json_encode(['status' => 0, 'msg' => '修改失败，已达到允许修改的次数！']);
            exit;
        }
        if ($data['id'] != $Model->id ) {
            echo json_encode(['status' => 0, 'msg' => '数据异常，请重试']);
            exit;
        }
        if ($Model->save()) {
            //如果用户更改了信息
            $update = ['update_number' => $data['update_number'] + 1, 'last_update_at' => $_SERVER['REQUEST_TIME']];
            $Model->where(['id' => $data['id']])->save($update);
            echo json_encode(['status' => 1, 'msg' => '修改成功！', 'jumpUrl' => U('User/index')]);
        } else {
            echo json_encode(['status' => 0, 'msg' => '数据未修改']);
        }
    }
}