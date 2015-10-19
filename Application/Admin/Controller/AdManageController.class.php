<?php

namespace Admin\Controller;
class AdManageController extends BaseController {
    public function _initialize() {

        parent::_initialize();
        $this->titleL1 = "广告位管理";
    }
    
    public function index(){
        $number = I('number', 0, 'intval');
        $number = $number ? $number : 1;
    	$this->ad = M('Ad')->where(['number' => $number])->order('sort asc, id desc')->select();
        $this->display();
    }

    //添加广告位
    public function add() {
    	$number  = I('number',0, 'intval') ? I('number',0, 'intval') : 1;
    	$sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[$number]; //广告缩略图尺寸
        $this->display();
    }

    //添加广告位数据保存
    public function addHandle() {
    	$model = M('Ad');
    	$model->create();
    	if (!$model->thumb) $this->error('请上传缩略图');
    	if ($model->add()) {
    		$this->redirect('AdManage/index?number='.I('number'));
    	} else {
    		$this->error('添加失败');
    	}
    }

    public function edit() {
        $this->titleL2 = "编辑广告位";
        $number  = I('number',0, 'intval') ? I('number',0, 'intval') : 1;
    	$sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[$number]; //广告缩略图尺寸
    	$id = I('id', 0, 'intval');
    	if (!$id) $this->error('参数错误');
    	$this->data = M('Ad')->where(['id' => $id])->find();
    	$this->display();
    }

    //编辑广告位数据保存
    public function editHandle() {
    	$model = M('Ad');
    	$model->create();
    	if (!$model->thumb) $this->error('请上传缩略图');
    	if ($model->save()) {
    		$this->redirect('AdManage/index?number='.I('number'));
    	} else {
    		$this->error('修改失败');
    	}
    }

    //删除
    public function del() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Ad')->where(['id' => $id])->delete()) {
            $this->redirect('AdManage/index?number='.I('number'));
        } else {
            $this->error('删除失败');
        }
    }



}