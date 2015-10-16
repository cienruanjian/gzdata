<?php  

namespace Admin\Controller;

/**
 * 文章管理控制器
 */

class ArticleController extends BaseController
{

	public function _initialize() 
	{
        
        parent::_initialize();
        $this->titleL1 = "文章管理";
    }

     // 文章列表
    public function index() 
    {

        $this->cate = M('Category')->where(['status'=>1, 'type' => 3])->field('id,name')->select();
        $model = M('Article');
        $map   = ['status'  => 1];
        $count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE'));
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $list  = $model->where($map)->order('sort')->limit($Page->firstRow.','.$Page->listRows)->field('id, title, desc, create_time, editor, face200, cate_id')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->list = $list;
        $this->display();
    }

    //添加文章
    public function add() 
    {
       
        $this->cate = M('Category')->where('status=1 and type=3')->field('id,name')->select();
        $this->titleL2 = "添加文章";
        $this->display();
    }

    //添加文章数据处理
    public function addHandle() 
    {
       
        $model = M('Article');
        $model->create();
        $model->create_time = $_SERVER['REQUEST_TIME'];
        $model->content = $_POST['content'];
        if (!$model->title) $this->error('文章标题不能为空');
        if (!$model->desc) $this->error('文章描述不能为空');
        if (!$model->content) $this->error('文章内容不能为空');
        if(!$model->add()) $this->error('添加失败，请重试');
        $this->success('添加成功！');
    }

    //编辑文章
    public function edit() 
    {
      
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->cate = M('Category')->where('status=1 and type=3')->field('id,name')->select();
        $this->titleL2 = "编辑";
        $this->data = M('Article')->where(['id'=> $id])->find();
        $this->display();
    }

    //编辑文章数据处理
    public function editHandle() 
    {
       
        $model = M('Article');
        $model->create();
        $model->content = $_POST['content'];
        if (!$model->title) $this->error('文章标题不能为空');
        if (!$model->desc) $this->error('文章描述不能为空');
        if (!$model->content) $this->error('文章内容不能为空');
        if(!$model->save()) $this->error('修改失败，请重试');
        $this->success('修改成功！');
    }
    // 删除文章
    public function del() 
    {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Article')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}