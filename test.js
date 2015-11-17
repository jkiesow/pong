var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
    console.log(XMLHttpRequestObject.readyState);
} else if(window.ActiveXObject){
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function writeData(input){
    if(XMLHttpRequestObject){
        var kaka = XMLHttpRequestObject.open("GET", "test.php?text="+input);
        
        XMLHttpRequestObject.onreadystatechange = function(){
            if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status == 200){
                //obj.innerHTML = XMLHttpRequestObject.responseText;
                
            }
        }
        XMLHttpRequestObject.send(null);
    }
}