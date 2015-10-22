<?php

namespace Admin\Controller;
class QuestionController extends BaseController {
    public function _initialize() {

        parent::_initialize();
        $this->titleL1 = "帮助中心";
    }
    
    public function index(){
    	$this->titleL2 = '问题管理';
    	$this->list = M('Question')->order('sort asc, id desc')->select();
        $this->display();
    }

    //添加广告位
    public function add() {
    	$this->titleL2 = '添加问题';
        $this->display();
    }
    //添加广告位数据保存
    public function addHandle() {
    	$model = M('Question');
    	$model->create();
    	if (!$model->question) $this->error('问题不能为空');
    	if ($model->add()) {
    		$this->redirect('Question/index');
    	} else {
    		$this->error('添加失败');
    	}
    }

    public function edit() {
    	$id = I('id', 0, 'intval');
    	if (!$id) $this->error('参数错误');
    	$this->titleL2 = "编辑问题";
    	$this->data = M('Question')->where(['id' => $id])->find();
    	$this->display();
    }

    //编辑问题数据保存
    public function editHandle() {
    	$model = M('Question');
    	$model->create();
    	if (!$model->question) $this->error('问题不能为空');
    	if ($model->save()) {
    		$this->redirect('Question/index');
    	} else {
    		$this->error('内容未修改');
    	}
    }

    /**
     * 删除
     */
    public function del() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Question')->where(['id' => $id])->delete()) {
            $this->redirect('Question/index');
        } else {
            $this->error('删除失败');
        }
    }
}