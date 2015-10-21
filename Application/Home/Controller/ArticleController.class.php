<?php
namespace Home\Controller;
class ArticleController extends BaseController {
    public function index(){
   
    	$model = M('Article');
        $map   = ['status'  => 1, 'type' => 2];
        $count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE') ? C('PAGE_SIZE') : 15);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme',"%UP_PAGE% %DOWN_PAGE%");
        $show  = $Page->show();
        $list  = $model->where($map)->order('sort asc, id desc')->limit($Page->firstRow.','.$Page->listRows)->field('id, title, desc, create_at, thumb')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->list = $list;
        $this->display();
    }

    public function detail() {
    	$this->display();
    }
}