/**
 * uploadify异步图片上传
 * @param  string url    处理地址
 * @param  int    number 编号，对应配置文件尺寸
 * @param  string sid    session
 * @param  string dir    保存的目录名称
 * @return void       
 */
function uploadImage(url, number, sid, dir) {
	setTimeout(function() {
	    $('#upload').uploadify({
			'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
			'uploader'      :    url,
			'buttonImage'   :    "/Public/Plugin/uploadify/browse-btn.png",
			'width'         :    "120",
			'height'        :    "30",
			'fileTypeDesc'  :    "Image file",
			'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
			'formData'      :    {"number" : number, "session_id" : sid, "dir" : dir},
			'multi'         :     false,
			'removeTimeout' :     1,
			onUploadSuccess :     function(file, data, response) {
				eval('var data = ' + data);
				if (data.status == 1) {
					$('input[name=thumb]').val(data.path.thumb);
					$('#no-image').attr('src', "/"+data.path.thumb);
				} else {
					alert(data.msg);
				}
			}
	    });
	}, 10);
}