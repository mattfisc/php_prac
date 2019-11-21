function fetchTerm(){
    var myRequest = new XMLHttpRequest();
    myRequest.open("GET", "play.php", true);
    myRequest.send();
}

function createRandomWordDefin(){
    var json = JSON.parse(this.respnseText);

    document.getElementById("defin").innerHTML = json;
    document.getElementById("word").innerHTML = json;
}