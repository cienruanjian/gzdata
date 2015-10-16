<?php

namespace Admin\Controller;

/**
 * 类别管理控制器 type -> 1=新闻，2=影视
 * @author yuwei
 *
 */
class CategoryController extends BaseController {
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "类别管理";
    }
    /**
     * 类别列表
     */
    public function index () {
        $this->newsLists  = M('Category')->where('type=1')->select();
        $this->videoLists = M('Category')->where('type=2')->select();
        $this->kanwuLists = M('Category')->where('type=3')->select();
        $this->display();
    }
    /**
     * 添加类别
     */
    public function add () {
        $type        = I('type', 1, 'intval');
        switch ($type) {
            case 1 :
                $titleL2 = "添加新闻类别";
                break;
            case 2 :
                $titleL2 = "添加影视类别";
                break;
            case 3 :
                $titleL2 = "添加刊物类别";
                break;
            default:
                $this->error('参数错误');
                break;
        }
        $this->type    = $type;
        $this->titleL2 = $titleL2;
        $model = M('Category');
        $this->lists = $model->select();
        $this->display();
    }
    /**
     * 添加类别数据处理
     */
    public function addHandle () {
       $model = M('Category');
       $data   = array (
           'name'  => I('name'),
           'type'  => I('type',0 , 'intval'),
           'sort'  => I('sort', 0, 'intval'),
           'remark' => I('remark')
       );
       if (!$data['name'])
           $this->error('类别名称不能为空');
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
        $this->data = M('Category')->where(array('id' => $id))->find();
        $this->display();
    }
    /**
     * 编辑类型数据保存
     */
    public function editHandle () {
        $model = M('Category');
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
     * 类别停用
     */
    public function nonUse () {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $rs = M('Category')->where(array('id' => $id))->setField('status', 0);
        if (!$rs) $this->error('停用失败，请重试');
        $this->success('设置成功');
    }
}