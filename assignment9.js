var answer = "";
var defintion = "";

// BUTTON
function fetchTerm() {
    // TOPIC
    var li = document.getElementById("list").value;
    var xhr = new XMLHttpRequest();
    xhr.onload = createQuestions;
    // SEND
    xhr.open('GET', 'assignment9.php', true);
    
    xhr.send();
}

function createQuestions() {
    // CLEAR RESULTS
    document.getElementById("result").innerHTML = "";

    var json = JSON.parse(this.responseText);

    // GET WORD
    document.getElementById("word").innerHTML = "What answer best applies to the " + json.term + ":  " + json.definition;

    //MULTIPLE COICES
    document.getElementById("choices").innerHTML = "";

    for (var i = 0; i < json.choices.length; i++) {
        var button = document.createElement("button");
        button.innerHTML = json.choices[i].definition;
        button.className = json.choices[i].correct ? "correct" : "incorrect";
        button.onclick = display();
        button.style.display = "block";
        document.getElementById("choices").appendChild(button);
    }
}

function display() {
    document.getElementById("result").innerHTML = "You are " + this.className;
    //fetchTerm();
}
