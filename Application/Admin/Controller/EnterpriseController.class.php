<?php
namespace Admin\Controller;
/**
 * 合作企业管理
 * @author yuwei
 *
 */
class EnterpriseController extends BaseController {
    
    public function _initialize() {
        
        parent::_initialize();
        $this->titleL1 = "合作企业";
    }
    /**
     * 企业列表
     */
    public function index(){
        
        $this->titleL2 = "企业列表";
        $this->enterprise = M('Enterprise')->select();
        $this->display();
    }
    /**
     * 添加企业
     */
    public function add() {
        
        $this->titleL2 = "添加企业";
        $this->display();
    }
    /**
     * 添加企业数据处理
     */
    public function addHandle() {
        
        $model = M('Enterprise');
        $model->create();
        if (!$model->face245) $this->error('请上传企业LOGO');
        if(!$model->add()){ 
            $this->error('添加失败，请重试');
        } else {
            $this->success('添加成功！');
        }
    }

    /**
     * 编辑企业信息
     */
    public function edit() {

        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->data = M('Enterprise')->where(['id' => $id])->find();
        $this->display();
    }

    /**
     * 编辑企业信息保存
     */
    public function editHandle () {
        $model = M('Enterprise');
        $model->create();
        if (!$model->face245) $this->error('请上传企业LOGO');
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
        if (M('Enterprise')->where(['id' => $id])->delete()) {
            $this->error('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    
}










