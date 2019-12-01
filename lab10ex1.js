function getQuestion () {
    var myXMLRequest = new XMLHttpRequest();
  
    myXMLRequest.open("GET", "lab10ex1.php", true);
    myXMLRequest.send();
  
  }
  
  function createRandWordDef () {
    var json = JSON.parse(this.responseText);
  
    document.getElementById("definition").innerHTML = json.definition;
    document.getElementById("term").innerHTML = json.item;
  }
  