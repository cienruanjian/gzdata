<?php

namespace Admin\Controller;
/**
 * 新闻控制器
 * @author yuwei
 *
 */
class NewsController extends BaseController {
    public function _initialize() {
        parent::_initialize();
        $this->titleL1 = "新闻";
    }
    /**
     * 新闻列表
     */
    public function index() {
        $this->cate = M('Category')->where(['status'=>1, 'type' => 1])->field('id,name')->select();
        $model = M('News');
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
    /**
     * 添加新闻
     */
    public function add() {
        $this->cate = M('Category')->where('status=1 and type=1')->field('id,name')->select();
        $this->titleL2 = "添加新闻";
        $this->display();
    }
    /**
     * 添加新闻数据处理
     */
    public function addHandle() {
        $model = M('News');
        $model->create();
        $model->create_time = $_SERVER['REQUEST_TIME'];
        $model->content = $_POST['content'];
        if (!$model->title) $this->error('新闻标题不能为空');
        if (!$model->desc) $this->error('新闻描述不能为空');
        if (!$model->content) $this->error('新闻内容不能为空');
        if(!$model->add()) $this->error('添加失败，请重试');
        $this->success('添加成功！');
    }
    /**
     * 编辑新闻
     */
    public function edit() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->cate = M('Category')->where('status=1 and type=1')->field('id,name')->select();
        $this->titleL2 = "编辑";
        $this->data = M('News')->where(['id'=> $id])->find();
        $this->display();
    }
    /**
     * 编辑新闻数据处理
     */
    public function editHandle() {
        $model = M('News');
        $model->create();
        $model->content = $_POST['content'];
        if (!$model->title) $this->error('新闻标题不能为空');
        if (!$model->desc) $this->error('新闻描述不能为空');
        if (!$model->content) $this->error('新闻内容不能为空');
        if(!$model->save()) $this->error('修改失败，请重试');
        $this->success('修改成功！');
    }
    /**
     * 删除新闻
     */
    public function del() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('News')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}