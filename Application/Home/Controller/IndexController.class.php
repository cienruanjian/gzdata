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
        //文章
        $this->intro = $this->_getArticle(array(1), 4);
        $this->art   = $this->_getArticle(array(2, 3), 3);
        //大赛组织
        $this->link_4 = $this->_getLink(4, 25);
        $this->link_5 = $this->_getLink(5, 25);
        $this->link_6 = $this->_getLink(6, 25);
        $this->link_7 = $this->_getLink(7, 25);
        $this->link_8 = $this->_getLink(8, 25);
        $this->link_support = $this->_getLink(2, 12);
        $this->link_friend = $this->_getLink(3, 20);
        $this->display();
    }


    /**
     * 获取广告位
     * @param  integer $number [description]
     * @param  integer $limit  [description]
     * @return [type]          [description]
     */
    private function _getAd($number = 1, $limit = 4) {
        return M('Ad')->where(array('number' => $number))->limit($limit)->order('sort asc, id desc')->select();
    }

    /**
     * 获取文章
     * @param  integer $type  [description]
     * @param  [type]  $limit [description]
     * @return [type]         [description]
     */
    private function _getArticle($type, $limit) {
        return M('Article')->where(array('type' => array('in', $type)))->limit($limit)->order('hot desc, sort asc')->field('id, title, desc, thumb')->select();
    }

    /**
     * 获取友情连接
     * @param  integer $type  [description]
     * @param  integer $limit [description]
     * @return [type]         [description]
     */
    private function _getLink($type = 1, $limit = 12) {
        return M('Link')->where(array('type' => $type))->limit($limit)->order('sort')->select();
    }


}