function fetchTerm() {

    // USER INPUT
    var userInput = document.getElementById("type").value; 
    
    var xhr = new XMLHttpRequest();
    xhr.onload = createPossibleAnswers;
    xhr.open("GET", "assignment9.php?q="+userInput, true); 
    xhr.send();
}

function createPossibleAnswers() {
    // CLEAR ALL
    document.getElementById("word").innerHTML = "";
    document.getElementById("result").innerHTML = "";
    document.getElementById("choices").innerHTML = ""; 

    // ARRAY
    var json = JSON.parse(this.responseText);
    
    // DISPLAY WORD
    document.getElementById("word").innerHTML = "What answer best applies to the " + json.category + ":  " + json.fname;

    // MULTIPLE CHOICE
    for (var i = 0; i < json.choices.length; i++) {

        var button = document.createElement("button");
        button.innerHTML = json.choices[i].definition;
        button.className = json.choices[i].correct ? "correct" : "incorrect";
        button.onclick = showResult;
        button.style.display = "block";
        document.getElementById("choices").appendChild(button);
    }
}

// DISPLAY ANSWER
function showResult() {
    document.getElementById("result").innerHTML = "You are " + this.className;

}
