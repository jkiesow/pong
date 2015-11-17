var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
    console.log(XMLHttpRequestObject.readyState);
} else if(window.ActiveXObject){
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}
document.getElementById('testbereich').addEventListener(onload, getData('test.txt', 'testbereich'));

function getData(src, divID){
    setInterval(function(){
        if(XMLHttpRequestObject){
        var obj = document.getElementById(divID);
        XMLHttpRequestObject.open("GET", src);
        console.log(XMLHttpRequestObject.readyState);

        XMLHttpRequestObject.onreadystatechange = function(){
            if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status == 200){
                obj.innerHTML = XMLHttpRequestObject.responseText;
                console.log(XMLHttpRequestObject.readyState);
            }else{
                obj.innerHTML = "No Games in progress!";
            }
        }
        console.log(XMLHttpRequestObject.readyState);
        XMLHttpRequestObject.send(null);
    }
    },3500);
}
  
    