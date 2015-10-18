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

       $number  = I('number', 0, 'intval');
       $sizeArr = C('AD_THUMB_SIZE');
       $dir     = I('dir') ? I('dir') : 'ad/';
       $thumb   = array(
            'thumb'  => $sizeArr[$number]
       );
       $arr = $this->_upload($dir, $thumb);
       echo json_encode($arr);
    }

    /**
     * 上传pdf
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
        $obj->maxSize  = C('UPLOAD_MAX_SIZE') ;// 设置附件上传大小
        $obj->rootPath =C('UPLOAD_PATH');
        $obj->savePath =$path;
        $obj->exts     =  C('UPLOAD_IMG_EXTS');// 设置附件上传类型
        $obj->saveName = array('uniqid','');//文件名规则
        $obj->replace  = true;//存在同名文件覆盖
        $obj->autoSub  = true;//使用子目录保存
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