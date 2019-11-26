var question = document.getElementById("question").innerHTML;

var option1 = document.getElementById("option1").innerHTML;
var option2 = document.getElementById("option2").innerHTML;
var option3 = document.getElementById("option3").innerHTML;

var data = array();

function get_select(){
    var select = document.getElementById("list").value;
    fetchList();
}

function readFile(){

}

function fetchList(){
    var myRequest = new XMLHttpRequest();
    myRequest.open("GET", "play.php", true);
    myRequest.send();
}