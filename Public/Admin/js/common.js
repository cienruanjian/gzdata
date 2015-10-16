/**
 * 通用js
 */
$(function() {
	$('a.del').click(function() {
		if (!confirm('删除后内容将无法找回，确定删除？')) {
			return false;
		} 
	});
});