function fetchTerm(){
    var myRequest = new XMLHttpRequest();
    myRequest.open("GET", "play.php", true);
    myRequest.send();
}

function createRandomWordDefin(){
    var json = JSON.parse(this.responseText);

    document.getElementById("defin").innerHTML = json.definition;
    document.getElementById("word").innerHTML = json.word;
}
