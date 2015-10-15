$(function() {

	//焦点大图切换
	$(".btn").show();
	$(".btn  a:first").addClass("active");  
	
	$().gallery({
		current: [".show_images_1",".show_images_1_img"],
		left: [".show_images_2",".show_images_2_img"],
		right: [".show_images_3",".show_images_3_img"],
		none: [".show_images_4",".show_images_4_img"],
		duration: 500,
		start: function() {
		  $(".header_text").fadeOut(150);
		},
		end: function() {
		  $(".header_text").fadeIn(150);
		},
		autoChange : true,
		changeTimeout: 3000,
		stopTarget : ".header_stage"
	});

	//居中
	centerFocus();
	$(window).resize(centerFocus)

	//小焦点图
	Qfast.add('widgets', { path: "js/terminator2.2.min.js", type: "js", requires: ['fx'] });
	Qfast(false, 'widgets', function () {
		K.tabs({
			id: 'fsD1',   //焦点图包裹id
			conId: "D1pic1",  //** 大图域包裹id
			tabId:"D1fBt",
			tabTn:"a",
			conCn: '.fcon', //** 大图域配置class
			auto: 1,   //自动播放 1或0
			effect: 'fade',   //效果配置
			eType: 'click', //** 鼠标事件
			pageBt:true,//是否有按钮切换页码
			bns: ['.prev', '.next'],//** 前后按钮配置class
			interval: 3000  //** 停顿时间
		});
	});
  
});
function centerFocus() {
    var documentWidth    = $(document).width();
    var wrapperWidth = $('#wrapper').width();
    var ml = -(wrapperWidth - documentWidth) / 2 +　'px';
    $('#wrapper').css('marginLeft' , ml);
  }