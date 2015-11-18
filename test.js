var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
} else if(window.ActiveXObject){
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function writeData(){
    if(XMLHttpRequestObject){
        var namep1 = document.getElementById('namep1').value;
        var namep2 = document.getElementById('namep2').value;
        var running = document.getElementById('running');
        if(running.checked){
            running="true";
        }else{
            running="false";
        }
        var scorep1 = document.getElementById('0').value;
        var scorep2 = document.getElementById('1').value;
        var dataString = "namep1="+namep1+"&namep2="+namep2+"&running="+running+"&scorep1="+scorep1+"&scorep2="+scorep2;
        XMLHttpRequestObject.open("GET", "testxml.php?"+dataString, true);
        XMLHttpRequestObject.onreadystatechange = function(){
            if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status == 200){

                
            }
        };
        XMLHttpRequestObject.send();

    }
}