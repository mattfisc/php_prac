// JS
function fetchTerm() {

    var myXMLRequest = new XMLHttpRequest();
    myXMLRequest.open("GET", "lab10ex3.php", true);
    myXMLRequest.send();
  }
  
  function createRandomWordDefin() {
    //TASK 1: PARSE THE RETURNED JSON OBJECT
  var json = JSON.parse(this.responseText);
  
    //TASK 2: GET THE DEFINITION AND WORD
    document.getElementById("defin").innerHTML = json.definition;
    document.getElementById("word").innerHTML = json.word;
  }
  