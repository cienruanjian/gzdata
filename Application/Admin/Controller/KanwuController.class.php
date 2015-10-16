<?php  

namespace Admin\Controller;
class KanwuController extends BaseController
{

	public function _initialize() 
	{

		parent::_initialize();
		$this->titleL1 = "广电报";
	}

	//广电报列表
	public function index()
	{	
		$model = M('Kanwu');
		$count = $model->count();
        $Page  = new \Think\Page($count,16);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show  = $Page->show();
        $list  = $model->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->field('face240, add_time, number, id')->select();
        $this->assign('lists',$list);
        $this->assign('page',$show);
		$this->display();
	}

	//添加广电报
	public function add() 
	{

		$this->titleL2 = "添加刊物";
		$this->display();
	}

	//添加刊物保存
	public function addHandle()
	{

		$model = M('Kanwu');
		$model->create();
		if (!$model->url) $this->error('请上传刊物');
		if (!$model->number) $this->error('请输入刊物期数');
		$model->add_time = time();
		if ($model->add()) {
			$this->success('添加成功');
		} else {
			$this->error('添加失败');
		}

	}
	//编辑广电报
	public function edit()
	{

		$this->display();
	}

	//预览
	public function viewer()
	{

		$id = I('id', 0, 'intval');
		if (!$id) $this->error('参数错误');
		$this->url = M('Kanwu')->where(['id' => $id])->getField('url');
		$this->display();
	}
	//删除
	public function del() 
	{

		$id = I('id', 0, 'intval');
		if (!$id) $this->error('参数错误');
		$kanwu = M('Kanwu')->where(['id' => $id])->find();
		
		if (M('Kanwu')->where(['id' => $id])->delete()) {
			@unlink(__ROOT__.'/'.$kanwu['face508']);
			@unlink(__ROOT__.'/'.$kanwu['face157']);
			@unlink(__ROOT__.'/'.$kanwu['face240']);
			@unlink(__ROOT__.'/'.$kanwu['url']);

			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}
}



?>