<?php

namespace Admin\Controller;
class ScreeningController extends BaseController {
    public function _initialize() {

        parent::_initialize();
        $this->titleL1 = "上映管理";
    }
    
    public function index(){
        $type = I('type', 0, 'intval');
        $type = $type ? $type : 1;
        switch ($type) {
            case 1:
                $titleL2 = "正在上映";
                break;
            case 2:
                $titleL2 = "即将上映";
                break;
            default:
                $this->error('非法操作');
                break;
        }
        $this->titleL2 = $titleL2;
        $model = M('Screening');
        $map = ['type' => $type];
    	$count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE'));
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $list  = $model->where($map)->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->list = $list;
        $this->display();
    }

    //添加
    public function add() {
        $this->titleL2 = "添加";
        $this->display();
    }
   
    //添加数据保存
    public function addHandle() {
    	$model = M('Screening');
    	$model->create();
        $model->time = strtotime($model->time);
        if (!$model->name) $this->error('影片名称不能为空');
        if (!$model->small_thumb) $this->error('请上传缩略图');
    	if ($model->add()) {
    		$this->success('上传成功');
    	} else {
    		$this->error('上传失败');
    	}
    }

    public function edit() {
    	$id = I('id', 0, 'intval');
        $this->titleL2 = "编辑";
    	if (!$id) $this->error('参数错误');
    	$this->data = M('Screening')->where(['id' => $id])->find();
    	$this->display();
    }

    //编辑数据保存
    public function editHandle() {
    	$model = M('Screening');
    	$model->create();
        $model->time = strtotime($model->time);
    	if (!$model->name) $this->error('影片名称不能为空');
        if (!$model->small_thumb) $this->error('请上传缩略图');
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
        if (M('Screening')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

}