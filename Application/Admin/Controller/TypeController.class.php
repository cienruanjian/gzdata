<?php

namespace Admin\Controller;

/**
 * 类别管理控制器 
 * @author yuwei
 *
 */
class TypeController extends BaseController {
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "类别管理";
    }
    /**
     * 类别列表
     */
    public function index () {
        $this->lists  = M('Type')->order('sort asc')->select();
        $this->display();
    }
    /**
     * 添加类别
     */
    public function add () {
        $this->titleL2 = "添加类别";
        $model = M('Type');
        $this->lists = $model->select();
        $this->display();
    }
    /**
     * 添加类别数据处理
     */
    public function addHandle () {
       $model = M('Type');
       $data   = array (
           'name'  => I('name'),
           'sort'  => I('sort', 0, 'intval'),
           'desc' => I('desc')
       );
       if (!$data['name'])
           $this->error('类别名称不能为空');
       $id = $model->add($data);
       if (!$id) $this->error('添加失败，请重试');
       $this->redirect('Type/index');
    }
    
    /**
     * 编辑类别
     */
    public function edit () {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->titleL2 = "编辑";
        $this->data = M('Type')->where(array('id' => $id))->find();
        $this->display();
    }
    /**
     * 编辑类型数据保存
     */
    public function editHandle () {
        $model = M('Type');
        $data   = array (
            'id'     => I('id', 0, 'intval'),
            'name'   => I('name'),
            'sort'   => I('sort', 0, 'intval'),
            'status' => I('status',0, 'intval'),
            'desc'   => I('desc')
        );
        if (!$data['name'])
            $this->error('类别名称不能为空');
        $rs= $model->save($data);
        if (!$rs) $this->error('修改失败，请重试');
        $this->redirect('Type/index');
    }
    /**
     * 类别停用
     */
    public function nonUse () {
        $id = I('id', 0, 'intval');
        $set = I('set', 0 , 'intval');
        $set = $set ? $set : 0;
        if (!$id) $this->error('参数错误');
        $rs = M('Type')->where(array('id' => $id))->setField('status', $set);
        if (!$rs) $this->error('设置，请重试');
        $this->redirect('Type/index');
    }
}