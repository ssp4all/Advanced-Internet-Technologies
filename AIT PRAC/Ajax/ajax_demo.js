
var xmlHttp = createXmlHttpRequestObject();

//object used to communicate
function createXmlHttpRequestObject(){
	
	var xmlHttp;
	
	if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}
	else{
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP")
	}
	
	return xmlHttp;
}

function showhint() {

	var xmlHttp = createXmlHttpRequestObject();
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4 && xmlHttp.status==200){
			document.getElementById("output").innerHTML=xmlHttp.responseText;
		
			}
	};
	//xmlHttp.open("GET","sample.txt",true);
	xmlHttp.open("GET","apple.txt",true);
	xmlHttp.send();
}