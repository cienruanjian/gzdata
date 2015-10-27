<?php
namespace Admin\Controller;
/**
 * 合作企业管理
 * @author yuwei
 *
 */
class LinkController extends BaseController {
    
    public function _initialize() {
        
        parent::_initialize();
        $this->titleL1 = "合作企业";
    }
    /**
     * 企业列表
     */
    public function index(){
        $type = I('type') ? I('type') : 1; 
        $this->titleL2 = "企业列表";
        $this->lists = M('Link')->where(['type' => $type])->order('sort')->select();
        $this->display();
    }
    /**
     * 添加企业
     */
    public function add() {
        $sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[201]; //缩略图尺寸
        $this->titleL2 = "添加企业";
        $this->display();
    }
    /**
     * 添加企业数据处理
     */
    public function addHandle() {
        
        $model = M('Link');
        $model->create();
        $model->type = $model->type ? $model->type : 1;
        if (!$model->name) $this->error('名称不能为空');
        if (!$model->thumb && $model->type == 2) $this->error('请上传企业LOGO');
        if($model->add()){ 
            $this->redirect('Link/index?type='.I('type'));
        } else {
            $this->error('添加失败！');
        }
    }

    /**
     * 编辑企业信息
     */
    public function edit() {

        $id = I('id', 0, 'intval');
        $sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[201]; //缩略图尺寸
        if (!$id) $this->error('参数错误');
        $this->data = M('Link')->where(['id' => $id])->find();
        $this->display();
    }

    /**
     * 编辑企业信息保存
     */
    public function editHandle () {
        $model = M('Link');
        $model->create();
        if (!$model->name) $this->error('名称不能为空');
        if (!$model->thumb && $model->type == 2) $this->error('请上传企业LOGO');
        if($model->save()){ 
            $this->redirect('Link/index?type='.I('type'));
        } else {
            $this->error('内容未修改！');
        }
    }
    /**
     * 删除
     */
    public function del() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Link')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    
}










