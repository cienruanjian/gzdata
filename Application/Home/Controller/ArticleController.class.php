<?php
namespace Home\Controller;
class ArticleController extends BaseController {
    public function index(){
   
    	$model = M('Article');
        $type  = I('type',0, 'intval') ? I('type',0, 'intval') : 2;
        $map   = ['status'  => 1];
        $keyword = trim(I('keyword'));
        if ($keyword) {
            $map ['title'] = ['like', '%'.$keyword.'%'];
            $this->keyword = $keyword;
        } else {
            $map['type'] = $type;
        }
        $count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE') ? C('PAGE_SIZE') : 15);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme',"%UP_PAGE% %DOWN_PAGE%");
        $show  = $Page->show();
        $list  = $model->where($map)->order('sort asc, id desc')->limit($Page->firstRow.','.$Page->listRows)->field('id, title, desc, create_at, thumb')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function detail() {
		$id = I('id', 0, 'intval');
		$id = $id ? $id : 1;
		M('Article')->where(['id' => $id])->setInc('click', 1);
		$this->article = M('Article')->where(['id' => $id])->find();
		$this->display();
	}
}