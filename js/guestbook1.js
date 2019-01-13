var bustcachevar=1; //bust potential caching of external pages after initial request? (1=yes, 0=no)
var bustcacheparameter="";


//add row to a table - добавление строки в базу данных (вроде)
function createRequestObject(){
	try	{
		xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
	}	catch(e)	{
		alert('Sorry, but your browser doesn\'t support XMLHttpRequest.');
	};
	return xmlhttp;
};

//display comment on the page - отображение комментария на странице
function ajaxpage(url, containerid){
	var page_request = createRequestObject();
	
	if (bustcachevar) bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
	page_request.open('GET', url+bustcacheparameter, true)
	page_request.send(null)

	page_request.onreadystatechange=function(){
		loadpage(page_request, containerid)
	}

}

function loadpage(page_request, containerid){
	if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1)) {
	    document.getElementById(containerid).innerHTML=page_request.responseText;
	};
}


function LoadComments() {
	ajaxpage("guestbook1.php", "GuestBook");
}


LoadComments();