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
    document.getElementById("defin").innerHTML = ""; 

    // ARRAY
    var json = JSON.parse(this.responseText);
    
    // DISPLAY QUESTION
    document.getElementById("word").innerHTML = "Select a definition that best describes the " + json.term + ":  " + json.food;

    // MULTIPLE CHOICE
    for (var i = 0; i < json.choices.length; i++) {

        var button = document.createElement("button");
        button.innerHTML = json.choices[i].definition;
        button.className = json.choices[i].correct ? " correct" : " wrong. Try again";
        button.onclick = showResult;
        button.style.display = "block";
        button.style.color = "green";
        document.getElementById("defin").appendChild(button);
    }
}

// DISPLAY ANSWER
function showResult() {
    document.getElementById("result").innerHTML = "You are " + this.className;

}
