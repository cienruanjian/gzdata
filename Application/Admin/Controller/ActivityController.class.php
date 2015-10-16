<?php

namespace Admin\Controller;
class ActivityController extends BaseController {
    public function _initialize() {

        parent::_initialize();
        $this->titleL1 = "活动管理";
    }
    
    public function index(){
    	$this->titleL2 = '活动管理';
    	$this->activity = M('Activity')->order('sort asc, id desc')->select();
        $this->display();
    }

    //添加广告位
    public function add() {
    	$this->titleL2 = '添加活动';
        $this->display();
    }
    //添加广告位数据保存
    public function addHandle() {
    	$model = M('Activity');
    	$model->create();
    	if (!$model->big_thumb) $this->error('请上传大图');
    	if (!$model->small_thumb) $this->error('请上传缩略图');
    	if (!$model->name) $this->error('活动名称不能为空');
    	if ($model->add()) {
    		$this->success('添加成功');
    	} else {
    		$this->error('添加失败');
    	}
    }

    public function edit() {
    	$id = I('id', 0, 'intval');
    	if (!$id) $this->error('参数错误');
    	$this->titleL2 = "编辑活动";
    	$this->data = M('Activity')->where(['id' => $id])->find();
    	$this->display();
    }

    //编辑广告位数据保存
    public function editHandle() {
    	$model = M('Activity');
    	$model->create();
    	if (!$model->big_thumb) $this->error('请上传大图');
    	if (!$model->small_thumb) $this->error('请上传缩略图');
    	if (!$model->name) $this->error('活动名称不能为空');
    	if ($model->save()) {
    		$this->success('修改成功');
    	} else {
    		$this->error('修改失败');
    	}
    }

    /**
     * 删除
     */
    public function del() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Activity')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}