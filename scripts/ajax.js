function ajax(){
let xmlHttp;
if(window.XMLHttpRequest){
    xmlHttp = new XMLHttpRequest;
}else{
    xmlHttp =new ActiveXObject("Microsoft.XMLHTTP");
}

xmlHttp.onreadystatechange = function(){
if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
    console.log(xmlHttp.responseText);
}
}

xmlHttp.open('POST', 'https://api.staticforms.xyz/submit', true);
xmlHttp.send();
}