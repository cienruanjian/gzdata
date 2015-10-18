<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
    	//广告位内容查询
   		$this->ad_1 = $this->_getAd(1, 4);
   		$this->ad_2 = $this->_getAd(2, 4);
   		$this->ad_3 = $this->_getAd(3, 3);
   		$this->ad_4 = $this->_getAd(4, 3);
   		$this->ad_5 = $this->_getAd(5, 3);
   		$this->ad_6 = $this->_getAd(6, 3);
    	$this->display();
    }

   
    private function _getAd($number = 1, $limit = 4) {
    	return M('Ad')->where(array('number' => $number))->limit($limit)->order('sort asc, id desc')->select();
    }
}