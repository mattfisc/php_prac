function fetchFact() {
  var myXMLRequest = new XMLHttpRequest();
  myXMLRequest.onload = createWordDefinition;
  myXMLRequest.open("GET", "lab10ex3.php", true);
  myXMLRequest.send();
}
 
function createWordDefinition(){
  //TASK 1: PARSE THE RETURNED JSON OBJECT
  var json = JSON.parse(this.responseText);
  //TASK 2: GET THE DEFINITION AND WORD AND DISPLAY IT
  document.getElementById("description").innerHTML = "This C++ fact concerns " + json.factType + ":";
  document.getElementById("factStatement").innerHTML =  json.fact;
}
