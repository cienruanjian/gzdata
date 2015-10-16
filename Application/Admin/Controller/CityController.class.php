<?php

namespace Admin\Controller;

class CityController extends BaseController {
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "城市管理";
    }
    /**
     * 城市列表
     */
    public function index () {
        $this->lists  = M('City')->select();
        $this->display();
    }
    /**
     * 添加类别
     */
    public function add () {
        $this->titleL2 = '添加城市';
        $this->display();
    }
    /**
     * 添加类别数据处理
     */
    public function addHandle () {
        $model = M('City');
        $data   = array (
            'name'   => I('name'),
            'sort'   => I('sort', 0, 'intval'),
            'remark' => I('remark')
        );
        if (!$data['name'])
            $this->error('名称不能为空');
        $id = $model->add($data);
        if (!$id) $this->error('添加失败，请重试');
        redirect('index');
    }
    
    /**
     * 编辑类别
     */
    public function edit () {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->titleL2 = "编辑";
        $this->data = M('City')->where(array('id' => $id))->find();
        $this->display();
    }
    /**
     * 编辑城市数据保存
     */
    public function editHandle () {
        $model = M('City');
        $data   = array (
            'id'     => I('id', 0, 'intval'),
            'name'   => I('name'),
            'sort'   => I('sort', 0, 'intval'),
            'status' => I('status',0, 'intval'),
            'remark' => I('remark')
        );
        if (!$data['name'])
            $this->error('类别名称不能为空');
        $rs= $model->save($data);
        if (!$rs) $this->error('修改失败，请重试');
        $this->success('修改成功');
    }
    /**
     * 停用
     */
    public function nonUse () {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $rs = M('City')->where(array('id' => $id))->setField('status', 0);
        if (!$rs) $this->error('停用失败，请重试');
        $this->success('设置成功');
    }
}