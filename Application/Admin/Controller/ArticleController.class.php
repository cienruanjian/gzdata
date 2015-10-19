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

        $type  = I('type') ? I('type') : 1;
        switch ($type) {
            case '1':
                $titleL2 = "大赛简介";
                break;
            case '2':
                $titleL2 = "大赛咨询";
                break;
            default:
               $this->error('参数错误');
                break;
        }
        $this->titleL2 = $titleL2;

        $model = M('Article');
        $map   = ['status'  => 1, 'type' => $type];
        $count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE'));
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $list  = $model->where($map)->order('sort asc, id desc')->limit($Page->firstRow.','.$Page->listRows)->field('id, title, type, desc, create_at, thumb')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->list = $list;
        $this->display();
    }

    //添加文章
    public function add() 
    {
        $type  = I('type') ? I('type') : 1;
        $sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[$type + 100];
        if ($type != 1 && $type != 2) $this->error('参数错误');
        $this->type = $type;
        $this->titleL2 = "添加文章";
        $this->display();
    }

    //添加文章数据处理
    public function addHandle() 
    {
       
        $model = M('Article');
        $model->create();
        $model->create_at = $_SERVER['REQUEST_TIME'];
        $model->content = $_POST['content'];
        if (!$model->title) $this->error('文章标题不能为空');
        if (!$model->desc) $this->error('文章描述不能为空');
        if (!$model->content) $this->error('文章内容不能为空');
        if (!$model->thumb) $this->error('请添加文章缩略图');
        if ($model->add()) {
            $this->redirect('Article/index', array('type' => I('type')));
        } else {
            $this->error('添加失败！');
        }
    }

    //编辑文章
    public function edit() 
    {
      
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->titleL2 = "编辑";
        $data = M('Article')->where(['id'=> $id])->find();
        $sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[$data['type'] + 100];
        $this->data = $data;
        $this->display();
    }

    //编辑文章数据处理
    public function editHandle() 
    {
       
        $model = M('Article');
        $model->create();
        $model->content = $_POST['content'];
        $model->hot = I('hot') ? I('hot') : 0;
        if (!$model->title) $this->error('文章标题不能为空');
        if (!$model->desc) $this->error('文章描述不能为空');
        if (!$model->content) $this->error('文章内容不能为空');
        if (!$model->thumb) $this->error('请添加文章缩略图');
        if ($model->save()) {
            $this->redirect('Article/index', array('type' => I('type')));
        } else {
            $this->error('修改失败！');
        }
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