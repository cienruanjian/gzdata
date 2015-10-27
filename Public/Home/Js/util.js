var wait=60;
var _interval;
function time(obj) {
  if (wait == 0) {
    obj.removeAttribute("disabled");
    obj.value="免费获取验证码";
    wait = 60;
  } else {
    obj.setAttribute("disabled", true);
    obj.value="重新发送(" + wait + ")";
    wait--;
    _interval = setTimeout(function() {
      time(obj)
    },
    1000)
  }
}

 /*
  * 剩余字数统计
  * 注意 最大字数只需要在放数字的节点哪里直接写好即可 如：<var class="word">200</var>
  */
  function setTextareaNum(textArea,numItem) {
    var max = numItem.text(),
        curLength;
    textArea[0].setAttribute("maxlength", max);
    curLength = textArea.val().length;
    numItem.text(max - curLength);
    textArea.on('input propertychange', function () {
        numItem.text(max - $(this).val().length);
    });
  }