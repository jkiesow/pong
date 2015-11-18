var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
} else if(window.ActiveXObject){
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}
document.getElementById('testbereich').addEventListener(onload, getData('read.php', 'testbereich'));

function getData(src, divID){
    setInterval(function(){
        if(XMLHttpRequestObject){
        var obj = document.getElementById(divID);
        XMLHttpRequestObject.open("GET", src);

        XMLHttpRequestObject.onreadystatechange = function(){
            if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status == 200){
                if(XMLHttpRequestObject.responseText= null){
                    obj.innerHTML ="No games in progress!";
                }else{
                    obj.innerHTML = XMLHttpRequestObject.responseText;
                }
            }else{
                obj.innerHTML = "No Games in progress!";
            }
        }
        XMLHttpRequestObject.send(null);
    }
    },3500);
}
  
    