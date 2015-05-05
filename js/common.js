function getUrl(){
	return "&timeStamp=" + new Date().getTime();
}
function isDelete(uri){
	if(confirm('删除后数据无法恢复！您确定要删除吗？')){
		location.href=uri;
		return true;
	}
	return false;
}
function url(url, title){
	if(title != null){
		window.open(url, title);
	}else{
		location.href=url;
	}
}
/**
 * 基于jquery的数据效验
 */
function wIsEmpty(id){
	var val = $('#'+id).val();
	if(typeof val == 'undefined' || val == '')
		return true;
	return false;
}
function wIsInt(id){
	var val = $('#'+id).val();
	if(val == parseInt(val))
		return true;
	return false;
}
