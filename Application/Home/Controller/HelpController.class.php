<?php
namespace Home\Controller;
use Think\Controller;
class HelpController extends Controller {
    public function index(){
   		
   		$this->list = M('Question')->order('sort, id desc')->select();
    	$this->display();
    }
}