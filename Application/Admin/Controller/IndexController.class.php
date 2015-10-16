<?php
namespace Admin\Controller;
class IndexController extends BaseController {
    public function _initialize() {
        parent::_initialize();
        $this->titleL1 = "首页";
    }
    
    public function index(){
        $this->display();
    }
}