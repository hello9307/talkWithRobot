function ajax_tool_pro(option) {
	var ajax = new XMLHttpRequest();
	if (option.method=='get') {
		if (option.data) {
			option.url+='?';
			option.url+=option.data;
		}
		ajax.open(option.method,option.url);
		ajax.send();
	}else{
		ajax.open(option.method,option.url);
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		if (option.data) {
			ajax.send(option.data);
		}else{
			ajax.send();
		}
	}

	ajax.onreadystatechange = function () {
		if (ajax.readyState==4&&ajax.status==200) {
			option.success(ajax.responseText);
		}
	}

}