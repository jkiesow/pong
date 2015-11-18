var XMLHttpRequestWinner = false;

if (window.XMLHttpRequest) {
    XMLHttpRequestWinner = new XMLHttpRequest();
} else if(window.ActiveXObject){
    XMLHttpRequestWinner = new ActiveXObject("Microsoft.XMLHTTP");
}

function writeWinner(playerNo){
    var winner = playerNo + 1;
    if(XMLHttpRequestWinner){
        var name = document.getElementById('namep'+winner).value;
        alert(name);
        XMLHttpRequestWinner.open("GET", "winner.php?winner="+name, true);
        XMLHttpRequestWinner.onreadystatechange = function(){
            if(XMLHttpRequestWinner.readyState==4 && XMLHttpRequestWinner.status == 200){

                
            }
        };
        XMLHttpRequestWinner.send();

    }
}