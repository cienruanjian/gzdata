<?php

namespace Admin\Controller;
/**
 * 影城管理
 * @author yuwei
 *
 */
class TheaterController extends BaseController{
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "影城管理";
    }
    /**
     * 影城列表
     */
    public function index () {
        $model = M('Theater');
        $city = M('City')->where('status=1')->field('id, name')->select();
        $count = 0;
        foreach ($city as &$v) {
            $tmp = $model->where(['city_id' => $v['id']])->count();
            $v['count'] = $tmp;
            $count += $tmp;
        }
        $this->count = $count;
        $this->city = $city;
        $map = array();
        $cid = I('cid', 0, 'intval');
        if ($cid) $map['city_id'] = $cid;
        $list  = M('Theater')->where($map)->select();
        foreach ($list as &$v) {
            $v['city'] = M('City')->where(['id' => $v['city_id']])->getField('name');
        }
        $this->assign('list', $list);
        $this->display();
    }
    /**
     * 添加影城
     */
    public function add() {
        $this->city = M('City')->where('status=1')->field('id,name')->select();
        $this->titleL2 = "添加影城";
        $this->display();
    }
    /**
     * 添加影城数据处理
     */
    public function addHandle() {
        $model = M('Theater');
        $model->create();
        if (!$model->name) $this->error('影城名称不能为空');
        if($model->add()) {
            $this->success('添加成功');
        } else {
            $this->error('添加失败');
        }
    }
    /**
     * 编辑影城信息
     */
    public function edit() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->city = M('city')->where(['status' => 1])->field('name, id')->select();
        $model = M('Theater');
        $map   = ['id' => $id];
        $this->data = $model->where($map)->find();
        $this->display();        
    }
    /**
     * 编辑影城信息保存
     */
    public function editHandle () {
        $model = M('Theater');
        $model->create();
        if (!$model->name) $this->error('影城名称不能为空');
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
        if (M('Theater')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    /**
     * 图片
     */
    public function photo () {
        $id = I('id', 0, 'intval'); //影城id
        if (!$id) $this->error('参数错误');
        $this->theater_id = $id;
        $pid   = I('pid', 0, 'intval'); //图片id
        $model = M('TheaterPhoto');
        if ($pid) {
            $photo = $model->where(['id' => $pid])->find();
        } else {
            $photo = $model->where(['theater_id' => $id])->order('id asc')->limit(1)->find();
        }
        //存在图片
        if ($photo) {
            $pid = $photo['id'];
            //上一篇
            $pre_id = $model->where("id<".$pid." and theater_id=".$id)->order('id desc')->limit('1')->getField('id');
            $this->assign('pre_id',$pre_id);
            //下一篇
            $next_id = $model->where("id>".$pid." and theater_id=".$id)->order('id asc')->limit('1')->getField('id');
            $this->assign('next_id',$next_id);
            $this->assign('photo', $photo);
        }
        $this->display();
    }
}