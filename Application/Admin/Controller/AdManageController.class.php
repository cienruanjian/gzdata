<?php

namespace Admin\Controller;
class AdManageController extends BaseController {
    public function _initialize() {

        parent::_initialize();
        $this->titleL1 = "广告位管理";
    }
    
    public function index(){
    	$pos = I('pos',0, 'intval');
    	$pos = $pos ? $pos : 1;
    	switch ($pos) {
    		case '1':
    			$titleL2 = "首页广告位";
    			break;
    		case '2':
    			$titleL2 = "影视业广告位";
    			break;
    		case '3':
    			$titleL2 = "广电报广告位";
    			break;
    		
    		default:
    			$this->error('参数错误');
    			break;
    	}
    	$this->titleL2 = $titleL2;
    	$this->pos = $pos;
    	$this->ad = M('Ad')->where(['pos' => $pos])->order('sort asc, id desc')->select();
        $this->display();
    }

    //添加广告位
    public function add() {

    	$pos = I('pos',0, 'intval');
    	$pos = $pos ? $pos : 1;
    	switch ($pos) {
    		case '1':
    			$titleL2 = "添加首页广告";
    			$big_thumb = "1920*757/px";
    			$small_thumb = "360*170/px";
    			break;
    		case '2':
    			$titleL2 = "添加影视业广告";
    			$big_thumb = "1120*400/px";
    			$small_thumb = "100*100/px";
    			break;
    		case '3':
    			$titleL2 = "添加广电报广告";
    			$big_thumb = "226*340/px";
    			break;
    		
    		default:
    			$this->error('参数错误');
    			break;
    	}
    	$this->big_thumb = $big_thumb;
    	$this->small_thumb = $small_thumb;
    	$this->pos = $pos;
    	$this->titleL2 = $titleL2;
        $this->display();
    }
    //添加广告位数据保存
    public function addHandle() {
    	$model = M('Ad');
    	$model->create();
    	if (!$model->big_thumb) $this->error('请上传大图');
    	if ($model->pos != 3 && !$model->small_thumb) $this->error('请上传缩略图');
    	if ($model->add()) {
    		$this->success('上传成功');
    	} else {
    		$this->error('上传失败');
    	}
    }

    public function edit() {
    	$pos = I('pos',0, 'intval');
    	$pos = $pos ? $pos : 1;
    	switch ($pos) {
    		case '1':
    			$titleL2 = "编辑首页广告";
    			$big_thumb = "1920*757/px";
    			$small_thumb = "360*170/px";
    			break;
    		case '2':
    			$titleL2 = "编辑影视业广告";
    			$big_thumb = "700*320/px";
    			$small_thumb = "100*100/px";
    			break;
    		case '3':
    			$titleL2 = "编辑广电报广告";
    			$big_thumb = "226*340/px";
    			break;
    		
    		default:
    			$this->error('参数错误');
    			break;
    	}
    	$this->big_thumb = $big_thumb;
    	$this->small_thumb = $small_thumb;
    	$this->pos = $pos;
    	$id = I('id', 0, 'intval');
    	if (!$id) $this->error('参数错误');
    	$this->data = M('Ad')->where(['id' => $id])->find();
    	$this->display();
    }

    //编辑广告位数据保存
    public function editHandle() {
    	$model = M('Ad');
    	$model->create();
    	if (!$model->big_thumb) $this->error('请上传大图');
    	if ($model->pos != 3 && !$model->small_thumb) $this->error('请上传缩略图');
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
        if (M('Ad')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }



}