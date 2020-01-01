var pass = "";
var encryptedPassword="";

// HOMEPAGE-------------------

// SUBMIT PASSWORD TO PHP
// TO SIGN INTO MEMBER PAGE

// SWITCH TO SIGN UP PAGE
function register(){
    window.location.href = window.location + '#signUp';
    
}

// ADD PASSWORD
function addDigitToPassword(num){
    pass += num;
    var userPassword = document.getElementById("userPass");
    encryptedPassword += "*";
    userPassword.value = encryptedPassword;
}

// DELETE ONE DIGIT OF PASSWORD
function deleteOneDigit(){
    pass = pass.substring(0,len(pass));
    encryptedPassword = encryptedPassword.substring(0,len(encryptedPassword));
    
    document.getElementById("userPass").value = encryptedPassword;
}

// CLEAR PASSWORD
function clearPassword(){
    document.getElementById("userPass").value = "";
    pass = ""
    encryptedPassword = "";

}


// PAGE TWO--------------------
// SIGN UP PAGE

function loginPage(){
    
}

// PAGE THREE--------------------------
// MEMBER PAGE
function submitMuscleGroup(){
    var input = document.getElementById("muscleInput").value;
    
    
    var xhr = new XMLHttpRequest();
    xhr.onload = createList;
    xhr.open("GET", "fitness.php?q=" + input, true); 
    xhr.send();

}

function createList(){

// ARRAY
    //var json = JSON.parse(this.responseText);
    var json = this.responseText;
    document.getElementById("displayMuscleGroup").innerHTML = json;
}

function signUp(){
    var input = document.getElementById("firstName").value;
    var summary = document.getElementById("")
    
    var xhr = new XMLHttpRequest();
    xhr.onload = createList;
    xhr.open("POST", "fitness.php",true); 
    xhr.send(input);
}