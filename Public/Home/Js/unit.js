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