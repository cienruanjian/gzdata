<?php

namespace Admin\Controller;

/**
 * 类别管理控制器 
 * @author yuwei
 *
 */
class EnrollController extends BaseController {
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "类别管理";
    }
    /**
     * 类别列表
     */
    public function index () {
    	$n = I('n') ? I('n') : 1;
    	$map   = ['team_nature'  => $n];
    	$model = M('Match');
        $count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE') ? C('PAGE_SIZE') : 15);
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $list  = $model->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('lists',$list);
        $this->assign('page',$show);
        $this->list = $list;
        $this->display();
    }
   	
   	public function check() {

   		$id  = I('id', 0, 'intval');
   		if (!$id) $this->error('参数错误');
   		$set = I('set', 0, 'intval');
   		$set = $set ? $set : 0;
   		M('Match')->where(['id' => $id])->setField('status', $set);
   		$this->redirect('Enroll/index?p='.I('p'));
   	}
    
    //详细信息
   	public function detail() {
   		$id  = I('id', 0, 'intval');
   		if (!$id) $this->error('参数错误');
   		$data = M('Match')->where(['id' => $id])->find();
   		$data['type'] = M('Type')->where(['type' => $data['type']])->getField('name');
   		$this->data = $data;
   		$this->display();
   	}
}