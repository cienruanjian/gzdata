<?php
namespace Home\Controller;
use Think\Controller;
class IntroController extends Controller {
    public function index(){
   		$model = M('Article');
        $map   = ['status'  => 1, 'type' => 1];
        $list  = $model->where($map)->order('sort asc, id desc')->limit(8)->field('id, title')->select();
        $id = I('id') ? I('id') : 2;
        $this->article = $model->where(['id' => $id])->find();
        $this->list = $list;
        $this->display();
    	$this->display();
    }
}