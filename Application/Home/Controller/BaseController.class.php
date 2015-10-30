<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize() {
    }

    public function checkLogin() {
    	//检查用户是否已登录
        if (!$_SESSION['home'][C('USER_AUTH_KEY')]) {
            $this->redirect('Login/index',['ctl' => CONTROLLER_NAME, 'act' => ACTION_NAME]);
        }
    }

    public function upload() {
    	$filename = I('Filename');
    	$arr = $this->_uploadFile(['jpg', 'jpeg', 'gif', 'png','doc', 'docx', 'ppt', 'pdf'], 'match/');
    	$arr['filename'] = $filename;
    	echo json_encode($arr);
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
            return array('status' =>0, 'msg'=> $obj->getError());
        }else { 
            $file = $info['Filedata'];
            return array('status' =>1, 'path' => $obj->rootPath.$file['savepath'].$file['savename']);
        }
    }
}