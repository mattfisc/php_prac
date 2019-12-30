function getQuestion () {
    var xhr = new XMLHttpRequest();
    xhr.onload = createRandWordDef();
    xhr.open("GET", "lab10ex1.php", true);
    xhr.send();
  
  }
  
  function createRandWordDef () {
    var json = JSON.parse(this.responseText);
  
    document.getElementById("definition").innerHTML = json.definition;
    document.getElementById("term").innerHTML = json.item;
  }
  