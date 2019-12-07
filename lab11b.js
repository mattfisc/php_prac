function performQueryFunction(){
    //TASK 1: RETRIEVE THE FIRST NAME FROM THE FORM
    //SYNTAX FOR A QUERY STRING:
    var queryString = "lab11b.php?firstName=" + document.getElementById("firstname").value;
   
    //TASK 2: CREATE A REQUEST AND PROCESS IT
    var myXMLRequest = new XMLHttpRequest();
    myXMLRequest.onload = displayQueryResults;
    myXMLRequest.open("GET", queryString, true);
    myXMLRequest.send();
  }
   
  function displayQueryResults() {
    document.getElementById("queryResults").innerHTML = this.responseText;
  }
  