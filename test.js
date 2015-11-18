var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
    console.log(XMLHttpRequestObject.readyState);
} else if(window.ActiveXObject){
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function writeData(){
    if(XMLHttpRequestObject){
        var namep1 = document.getElementById('namep1').value;
        var namep2 = document.getElementById('namep2').value;
        var running = document.getElementById('running').value;
        var scorep1 = document.getElementById('scorep1').value;
        var scorep2 = document.getElementById('scorep2').value;
        console.log(XMLHttpRequestObject.readyState);
        var dataString = "namep1="+namep1+"&namep2="+namep2+"&running="+running+"&scorep1="+scorep1+"&scorep2="+scorep2;
        XMLHttpRequestObject.open("GET", "testxml.php?"+dataString, true);
        console.log(XMLHttpRequestObject.readyState);
        XMLHttpRequestObject.onreadystatechange = function(){
            console.log(XMLHttpRequestObject.readyState);
            if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status == 200){
                console.log(XMLHttpRequestObject.readyState);
                var xmlDoc = XMLHttpRequestObject.responseXML;
                
            }
        };
        XMLHttpRequestObject.send();
    }
}