<?php
namespace Admin\Controller;
use Think\Controller;

/**
 *基类控制器
 * @author yuwei
 *        
 */
class BaseController extends Controller {
    public function _initialize () {
       //检查用户是否已登录
        $session = session('admin');
        if (!$session[C('USER_AUTH_KEY')]) {
            $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            session('url', $url);
            $this->redirect('Login/index');
        }
    }
    public function   _empty(){
        header( " HTTP/1.0  404  Not Found" );
        $this->display( 'Public:404' );
    }
    
    public function uploadImage() {

        print_r($_POST['size']);
    }




    //新闻封面
    public function uploadNewsFace () {
        //缩略图尺寸
        $thumb = array(
            'face200' => array(200, 230),
            'face80'  => array(80, 90)
        );
        $arr = $this->_upload('news/', $thumb);
        echo json_encode($arr);
    }

    //礼品封面
    public function uploadGiftFace () {
        //缩略图尺寸
        $thumb = array(
            'small_thumb' => array(258, 203),
        );
        $arr = $this->_upload('gift/', $thumb);
        echo json_encode($arr);
    }

    //文章封面
    public function uploadArticleFace () {
        //缩略图尺寸
        $thumb = array(
            'face200'  => array(200, 230),
            'face368'  => array(368, 276),
            'face208'  => array(208, 156),
            'face258'  => array(258, 341),
            'face255'  => array(255, 256)
        );
        $arr = $this->_upload('article/', $thumb);
        echo json_encode($arr);
    }
    /**
     * 新闻图片
     */
    public function uploadEnterpriseFace() {
        $thumb = [
            'face245' => [245, 115]
        ];
        $arr =$this->_upload('enterprise/', $thumb);
        echo json_encode($arr);
    }
     /**
     * 广告位大图
     */
    public function uploadAdBigThumb() {
        $pos = I('pos', '', 'intval');
        $pos = $pos ? $pos : 1;
        switch ($pos) {
            case '1':
                $thumb = ['big_thumb' => [1920, 757]];
                break;
            case '2':
                $thumb = ['big_thumb' => [1120, 400]];
                break;
             case '3':
                $thumb = ['big_thumb' => [226, 340]];
                break;
            
            default:
                echo json_encode(['status' => 0]);
                break;
        }
        $arr =$this->_upload('ad/', $thumb);
        echo json_encode($arr);
    }

    /**
     * 上映电影封面图
     */
    public function uploadScreeningSmallThumb() {
        $thumb = [
            'small_thumb' => [186, 248]
        ];
        $arr =$this->_upload('screening/', $thumb);
        echo json_encode($arr);
    }

    /**
     * 上映电影详情图
     */
    public function uploadScreeningBigThumb() {
        $thumb = [
            'big_thumb' => [800, 480]
        ];
        $arr =$this->_upload('screening/', $thumb);
        echo json_encode($arr);
    }


     /**
     * 广告位小图
     */
    public function uploadAdSmallThumb() {
        $pos = I('pos', '', 'intval');
        $pos = $pos ? $pos : 1;
        switch ($pos) {
            case '1':
                $thumb = ['small_thumb' => [360, 170]];
                break;
            case '2':
                $thumb = ['small_thumb' => [60, 60]];
                break;
            
            default:
                echo json_encode(['status' => 0]);
                break;
        }
        $arr =$this->_upload('ad/', $thumb);
        echo json_encode($arr);
    }

     /**
     * 活动缩略图
     */
    public function uploadActivitySmallThumb() {
        $thumb = ['small_thumb' => [1084, 364]];
        $arr =$this->_upload('activity/', $thumb);
        echo json_encode($arr);
    }
     /**
     * 活动详情图
     */
    public function uploadActivityBigThumb() {
        $arr =$this->_upload('activity/');
        echo json_encode($arr);
    }


    /**
     * 影城封面
     */
    public function uploadTheaterFace() {
        $thumb = [
                'face520' => [520, 290],
                'face40'  => [40, 40]
        ];
        $arr =$this->_upload('theater/', $thumb);
        echo json_encode($arr);
    }
    /**
     * 影城图片
     */
    public function uploadTheaterPhoto() {
        $theater_id = I('theater_id', 0, 'intval');
        if (!$theater_id) {
            echo json_encode(['status' => 0]);
            exit;
        }
        $thumb = [
            'path' => [350, 250],
        ];
        $arr =$this->_upload('theater/', $thumb);
        if ($arr) {
            $data = [
                'theater_id' => $theater_id,
                'path'       => $arr['path']['path'],
            ];
            if (M('TheaterPhoto')->add($data));
            $arr = ['status' => 1, 'path' => $data['path']];
        }
        echo json_encode($arr);
    }
    /**
     * 上传视频图片
     */
    public function uploadMovieFace() {
        $thumb = [
                'face209' => [209, 114],
                'face142' => [142, 81],
                'face96'  => [96, 85],
                'face196' => [196, 110],
                'face80'  => [80, 45],
                'face40'  => [40, 40],
                'face160' => [160, 181]
            ];
        $arr =$this->_upload('movieFace/', $thumb);
        echo json_encode($arr);
    }
     /**
     * 上传刊物图片
     */
    public function uploadKanwuFace() {
        $thumb = [
                'face508' => [508, 760],
                'face157' => [157, 224],
                'face240'  => [240, 360]
            ];
        $arr =$this->_upload('kanwuFace/', $thumb);
        echo json_encode($arr);
    }
    /**
     * 上传电影
     */
    public function uploadMovie() {
        echo json_encode($this->_uploadFile(C('UPLOAD_MOVIE_EXTS'), 'movie/'));
    }
    /**
     * 上传电影
     */
    public function uploadPdf() {
        echo json_encode($this->_uploadFile(['pdf'], 'pdf/'));
    }
    /**
     * 图片上传处理（支持生成多张缩略图）
     * @param String $path 保存文件夹名称
     * @param array  $thumb 格式如下
     * array(
     *    'pic180' => array(180, 180),
     *    'pic50'  => array(50, 50),
     * )
     * @param string $method 缩略图生成的方式
     *  IMAGE_THUMB_SCALE     =   1 ; //等比例缩放类型
     *  IMAGE_THUMB_FILLED    =   2 ; //缩放后填充类型
     *  IMAGE_THUMB_CENTER    =   3 ; //居中裁剪类型
     *  IMAGE_THUMB_NORTHWEST =   4 ; //左上角裁剪类型
     *  IMAGE_THUMB_SOUTHEAST =   5 ; //右下角裁剪类型
     *  IMAGE_THUMB_FIXED     =   6 ; //固定尺寸缩放类型
     * @return Array 图片上传信息
     */
    private function _upload($path,$thumb=array(), $method = \Think\Image::IMAGE_THUMB_CENTER) {
        $obj = new \Think\Upload();// 实例化上传类
        $obj->maxSize = C('UPLOAD_MAX_SIZE') ;// 设置附件上传大小
        $obj->rootPath=C('UPLOAD_PATH');
        $obj->savePath =$path;
        $obj->exts =  C('UPLOAD_IMG_EXTS');// 设置附件上传类型
        $obj->saveName = array('uniqid','');//文件名规则
        $obj->replace = true;//存在同名文件覆盖
        $obj->autoSub = true;//使用子目录保存
        $obj->subName  = array('date','Ym');//子目录创建规则，
        $info = $obj->upload();
        if(!$info) { //上传失败
            return array('status' =>0, 'msg'=> $obj->getError() );
        }else { //上传缩略图
            if(!empty($thumb)){ //生成缩略图
                $image = new \Think\Image();
                foreach($info as $file) {
                    $thumb_file = $obj->rootPath.$file['savepath'] . $file['savename'];
                    foreach ($thumb as $key => $value) {
                            $save_path = $obj->rootPath.$file['savepath'] . $key . $file['savename'];
                      		$image->open( $thumb_file )->thumb( $value[0], $value[1],$method )->save( $save_path );
                      		$data [$key] = $obj->rootPath.$file['savepath'] . $key .$file['savename'];
                    }
                    @unlink($thumb_file); //上传生成缩略图以后删除源文件
                }
            } else{
                foreach($info as $file) {
                    $data = array(
                        'path' => $obj->rootPath.$file['savepath'].$file['savename']
                    );
                }
            }
            return array('status' => 1, 'path' => $data);
        }
    }
    private function _uploadFile ($ext, $path) {
        $obj = new \Think\Upload();// 实例化上传类
        $obj->maxSize = C('UPLOAD_MAX_SIZE') ;// 设置附件上传大小
        $obj->rootPath=C('UPLOAD_PATH');
        $obj->savePath =$path;
        $obj->exts =  $ext;// 设置附件上传类型
        $obj->saveName = array('uniqid','');//文件名规则
        $obj->replace = true;//存在同名文件覆盖
        $obj->autoSub = true;//使用子目录保存
        $obj->subName  = array('date','Ym');//子目录创建规则，
        $info = $obj->upload();
        if(!$info) { //上传失败
            return array('status' =>0, 'msg'=> $obj->getError() );
        }else { 
            $file = $info['Filedata'];
            return array('status' =>1, 'path' => $obj->rootPath.$file['savepath'].$file['savename']);
        }
    }
}

?>