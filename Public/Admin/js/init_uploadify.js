/**
 * uploadify异步图片上传
 * @param  string url    处理地址
 * @param  int    width  缩略图宽度
 * @param  int    height 缩略图高度
 * @param  string sid    session
 * @param  string dir    保存的目录名称
 * @return string        [description]
 */
function uploadImage(url, size, sid, dir) {
	setTimeout(function() {
	    $('#upload').uploadify({
			'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
			'uploader'      :    url,
			'buttonImage'   :    "/Public/Plugin/uploadify/browse-btn.png",
			'width'         :    "120",
			'height'        :    "30",
			'fileTypeDesc'  :    "Image file",
			'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
			'formData'      :    {"size" : size, sid, "dir" : dir},
			'multi'         :     false,
			'removeTimeout' :     1,
			onUploadSuccess :     function(file, data, response) {
				eval('var data = ' + data);
				if (data.status == 1) {
					$('input[name=thumb]').val(data.path.thumb);
					$('#no-image').attr('src', "/"+data.path.thumb);
				} else {
					alert('图片上传失败，请重试...');
				}
			}
	    });
	}, 10);
}