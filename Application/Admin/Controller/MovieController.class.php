<?php

namespace Admin\Controller;
use Think\Page;
/**
 * 电影管理
 * @author yuwei
 *
 */
class MovieController extends BaseController{
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "电影管理";
    }
    /**
     * 列表
     */
    public function index () {
        $model = M('Movie');
        $cate = M('Category')->where('status=1 and type=2')->field('id, name')->select();
        $count = 0;
        foreach ($cate as &$v) {
            $tmp = $model->where(['cate_id' => $v['id']])->count();
            $v['count'] = $tmp;
            $count += $tmp;
        }
        $this->count = $count;
        $this->cate = $cate;
        $map = array();
        $cid = I('cid', 0, 'intval');
        if ($cid) $map['cate_id'] = $cid;
        $count = $model->where($map)->count();
        $Page  = new Page($count,C('PAGE_SIZE'));
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $list  = $model->where($map)->field('name, cate_id, id ,face40, intro')->order('sort asc, id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as &$v) {
            $v['cate'] = M('Category')->where(['id' => $v['cate_id']])->getField('name');
        }
        $this->assign('list', $list);
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 添加
     */
    public function add() {
        $this->cate = M('Category')->where('status=1 and type=2')->field('id,name')->select();
        $this->titleL2 = "添加电影";
        $this->display();
    }
    /**
     * 添加电影数据处理
     */
    public function addHandle() {
        $model = M('Movie');
        $model->create();
        $model->add_time = $_SERVER['REQUEST_TIME'];
        if (!$model->name) $this->error('电影名称不能为空');
        if (!$model->url) $this->error('请上传电影...');
        if($model->add()) {
            $this->success('添加成功');
        } else {
            $this->error('添加失败');
        }
    }
    /**
     * 编辑电影信息
     */
    public function edit() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->cate = M('Category')->where(['status' => 1])->field('name, id')->select();
        $model = M('Movie');
        $map   = ['id' => $id];
        $this->data = $model->where($map)->find();
        $this->display();        
    }
    /**
     * 编辑电影信息保存
     */
    public function editHandle () {
        $model = M('Movie');
        $model->create();
        if (!$model->name) $this->error('电影名称不能为空');
        if ($model->save()) {
            $this->success('修改成功');
        } else{
            $this->error('修改失败，请重试');
        }
    }
    /**
     * 删除
     */
    public function del() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Movie')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    /**
     * 评论
     */
    public function comment()
    {

        $this->titleL2 = "评论列表";
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->comment = M('Comment')->where(['type' => 1, 'obj_id' => $id])->order('id desc')->limit(20)->select();
        $this->display();
    }

    /**
     * 删除评论
     */
    public function delComment() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Comment')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

}