/* mgr */
function cLogin(id, con, act){

	if(id != ''){
		$.get('index.php?c='+con+'&a='+act+'&id='+id+getUrl(), '', function(data){
			if(data == '')
				alert('用户操作错误1');
			else if(data == 1)
				$('#'+act+'_'+id).attr('src', 'images/mgr/yes.gif');
			else if(data == 0)
				$('#'+act+'_'+id).attr('src', 'images/mgr/no.gif');
			else
				alert('用户操作错误2');
		});
	}
}

function cnumber(id, con){
	var number = $('#n_'+id).val();
	$.get('index.php?c='+con+'&a=cnumber&id='+id+'&number='+number+getUrl());
}

function delSub(){
	if(confirm('删除后数据无法恢复！您确定要删除吗？')){
		document.delForm.submit();
		return true;
	}
	return false;
	
}
