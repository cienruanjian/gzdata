<?php
namespace Home\Controller;
class EnrollController extends BaseController {
	public function _initialize() {
		parent::_initialize();
		$this->checkLogin();
	}
    public function index(){
   
    	$this->display();
    }
}