<?php

namespace Admin\Controller;

/**
 * 积分兑换管理控制器
 * @date 2015-07-21
 * @author yuwei
 */
class IntegralController extends BaseController
{

	public function _initialize()
	{

		parent::_initialize();
		$this->titleL1 = "积分兑换";
	}
	
	//礼品列表页
	public function index()
	{
		
		$this->titleL2 = "积分列表";
		$map   = 'status =1';
		$model = M('Gift');
		$count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE'));
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $list  = $model->where($map)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->field('id, name, end_at, t_no, a_no, l_no, small_thumb')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->list = $list;
		$this->display();
	}

	//添加礼品页
	public function add()
	{

		$this->titleL2 = "添加礼品";
		$this->display();
	}

	//添加礼品数据保存页
	public function addHandle()
	{
		$data = [
			'name'     => I('name'),
			't_no' => I('t_no', 0, 'intval'),
			'integral' => I('integral', 0, 'intval'),
			'price' => I('price'),
			'desc' => I('desc'),
			'end_at'   => strtotime(I('end_at')),
			'detail'     => $_POST['detail'],
			'small_thumb' => I('small_thumb')
		];

		if (! $data['name']) $this->error('礼品名称不能为空');
		if (! $data['t_no']) $this->error('礼品数量必须大于零');
		$data ['l_no'] = $data['t_no'];
		if (M('Gift')->add($data)) {
			$this->success('添加成功');
		} else {
			$this->error('添加失败');
		}
	}
	//编辑
	public function edit()
	{

		$this->titleL2 = "编辑";
		$id = I('id', 0, 'intval');
		if (!$id) $this->error('参数错误');
		$this->data = M('Gift')->where(['id' => $id])->find();
		$this->display();
	}
	
	//编辑数据保存
	public function editHandle()
	{

		$data = [
			'id' => I('id', 0, 'intval'),
			'name'     => I('name'),
			't_no' => I('t_no', 0, 'intval'),
			'integral' => I('integral', 0, 'intval'),
			'desc' => I('desc'),
			'price' => I('price'),
			'end_at'   => strtotime(I('end_at')),
			'detail'     => $_POST['detail'],
			'small_thumb' => I('small_thumb')
		];

		if (! $data['name']) $this->error('礼品名称不能为空');
		if (! $data['t_no']) $this->error('礼品数量必须大于零');
		if (M('Gift')->save($data)) {
			$this->success('修改成功');
		} else {
			$this->error('修改失败');
		}

	}


	public function del()
	{

		$id = I('id', 0, 'intval');
		if (!$id) $this->error('参数错误');
		$Model = M('Gift');
		$thumb = $Model->where(['id' => $id])->getField('small_thumb');
		$rs = $Model->where(['id' => $id])->delete();
		if ($rs) {
			//删除兑换记录
			M('Gift')->where(['gift_id' => $id])->delete();
			@unlink(__ROOT__.'/'.$thumb);
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}



	//兑换记录页
	public function record() 
	{

		$this->titleL2 = "兑换记录";
		$model = M('Exchange');
        $map   = 1;
		$by   = I('search-by');
		$keyword  = I('search-keyword');
		if ($by && $keyword)
			$map = $by.' like "%'.$keyword.'%"';
		$count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE'));
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $list  = $model->where($map)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $GiftDb = M('Gift');
        foreach ($list as &$v) {
        	$tmp = $GiftDb->where(['id' => $v['gift_id']])->field('name, small_thumb')->find();
        	$v['gift'] = $tmp['name'];
        	$v['small_thumb'] = $tmp['small_thumb'];
        }
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->list = $list;
		$this->display();
	}
	//兑换
	public function setStatus() {
		$id = I('id', 0, 'intval');
		if (!$id) $this->error('参数错误');
		$rs = M('Exchange')->where(['id' => $id])->setField('status', 0);
		if ($rs) {
			$gid = M('Exchange')->where(['id' => $id])->getField('gift_id');
			M('Gift')->where(['id' => $gid])->setDec('l_no', 1);
			$this->success('兑换成功');
		} else{
			$this->error('兑换失败');
		}
	}

}