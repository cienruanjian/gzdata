<?php

namespace Admin\Controller;
/**
 * 修改密码
 * @author yuwei
 *
 */
class MyController extends BaseController  {
    private $mid; //用户id
    public function _initialize() {
        parent::_initialize();
        $this->mid = session(C('USER_AUTH_KEY'));
        $this->titleL1 = "修改密码";
    }
    /**
     * 修改密码首页视图
     */
    public function index () {
        $this->titleL2 = "修改密码";
        $manger  = M('Manager')->where(array('id' => $this->mid))->field('id, login')->find();
        if (!$manger) $this->error('账号不存在');
        $this->manger = $manger;
        $this->display();
    }
    /**
     * 修改密码数据处理
     */
    public function handle () {
       $opwd  = I('opwd');
       $pwd   = I('pwd');
       $repwd = I('repwd');
       $map   = array('id' => $this->mid);
       
       //数据检测
       if (!$opwd || !$pwd || !$repwd)
           $this->error('数据不能为空');
        if ($pwd != $repwd) 
            $this->error('对不起，两次输入的密码不一致，请重试！');
       $model     = M('Manager');
       $password  = $model->where($map)->getField('password');
       if (md5($opwd) != $password) 
           $this->error('旧密码输入错误，请重试');
      $rs = $model->where($map)->setField('password', md5($pwd));
      if (!$rs) $this->error('修改失败，请重试');
      $this->success('修改成功');
    }
}