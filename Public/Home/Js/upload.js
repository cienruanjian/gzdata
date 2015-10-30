 setTimeout(function() {
  //上传商业计划书
  $('#upload_business_plan').uploadify({
    'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
    'uploader'      :    url,
    'buttonText'    :    "选择文件",
    'width'         :    "120",
    'height'        :    "30",
    'fileTypeDesc'  :    "Image file",
    'fileTypeExts'  :    "*.doc;*.docx;*.ppt;*.pdf",
    'formData'      :    {"session_id"  : sid},
    'multi'         :     false,
    'removeTimeout' :     1,
    onUploadSuccess :     function(file, data, response) {
      eval('var data = ' + data);
      if (data.status == 1) {
        $('input[name=business_plan]').val(data.path);
        $('input[name=business_plan_name]').val(data.filename);
        $('#upload-plan-tip').html('<img style="height:20px;padding:0;margin:5px;" src="/Public/Home/Images/check.gif" alt="" />'+data.filename);
      } else {
        layer.msg('文件上传失败，请重试...');
      }
    }
  });

  //上传营业执照扫描件
  $('#upload_business_license_scan').uploadify({
    'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
    'uploader'      :    url,
    'buttonText'    :    "选择文件",
    'width'         :    "105",
    'height'        :    "30",
    'fileTypeDesc'  :    "Image file",
    'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
    'formData'      :    {"session_id"  : sid},
    'multi'         :     false,
    'removeTimeout' :     1,
    onUploadSuccess :     function(file, data, response) {
      eval('var data = ' + data);
      if (data.status == 1) {
        $('input[name=business_license_scan]').val(data.path);
          $('#upload_business_license_scan').parents('.ipt').find('img.fileImg').attr('src','/'+data.path);
      } else {
        layer.msg('文件上传失败，请重试...');
      }
    }
  });

  $('#upload_duty_id_frontal_photo').uploadify({
    'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
    'uploader'      :    url,
    'buttonText'    :    "选择正面",
    'width'         :    "105",
    'height'        :    "30",
    'fileTypeDesc'  :    "Image file",
    'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
    'formData'      :    {"session_id"  : sid},
    'multi'         :     false,
    'removeTimeout' :     1,
    onUploadSuccess :     function(file, data, response) {
      eval('var data = ' + data);
      if (data.status == 1) {
        $('input[name=duty_id_frontal_photo]').val(data.path);
          $('#upload_duty_id_frontal_photo').parents('.ipt').find('img.fileImg').attr('src','/'+data.path);
      } else {
        layer.msg('文件上传失败，请重试...');
      }
    }
  });

  $('#upload_duty_id_back_photo').uploadify({
    'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
    'uploader'      :    url,
    'buttonText'    :    "选择反面",
    'width'         :    "105",
    'height'        :    "30",
    'fileTypeDesc'  :    "Image file",
    'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
    'formData'      :    {"session_id"  : sid},
    'multi'         :     false,
    'removeTimeout' :     1,
    onUploadSuccess :     function(file, data, response) {
      eval('var data = ' + data);
      if (data.status == 1) {
        $('input[name=duty_id_back_photo]').val(data.path);
          $('#upload_duty_id_back_photo').parents('.ipt').find('img.fileImg').attr('src','/'+data.path);
      } else {
        layer.msg('文件上传失败，请重试...');
      }
    }
  });

  $('#upload_duty_handheld_id_frontal_photo').uploadify({
    'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
    'uploader'      :    url,
    'buttonText'    :    "选择正面",
    'width'         :    "105",
    'height'        :    "30",
    'fileTypeDesc'  :    "Image file",
    'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
    'formData'      :    {"session_id"  : sid},
    'multi'         :     false,
    'removeTimeout' :     1,
    onUploadSuccess :     function(file, data, response) {
      eval('var data = ' + data);
      if (data.status == 1) {
        $('input[name=duty_handheld_id_frontal_photo]').val(data.path);
          $('#upload_duty_handheld_id_frontal_photo').parents('.ipt').find('img.fileImg').attr('src','/'+data.path);
      } else {
        layer.msg('文件上传失败，请重试...');
      }
    }
  });

  $('#upload_duty_handheld_id_back_photo').uploadify({
    'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
    'uploader'      :    url,
    'buttonText'    :    "选择反面",
    'width'         :    "105",
    'height'        :    "30",
    'fileTypeDesc'  :    "Image file",
    'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
    'formData'      :    {"session_id"  : sid},
    'multi'         :     false,
    'removeTimeout' :     1,
    onUploadSuccess :     function(file, data, response) {
      eval('var data = ' + data);
      if (data.status == 1) {
        $('input[name=duty_handheld_id_back_photo]').val(data.path);
          $('#upload_duty_handheld_id_back_photo').parents('.ipt').find('img.fileImg').attr('src','/'+data.path);
      } else {
        layer.msg('文件上传失败，请重试...');
      }
    }
  });

},

10); 
