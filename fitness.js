var pass = "";
var encryptedPassword="";

// HOME PAGE----------------------------------------

// SUBMIT PASSWORD TO PHP
// TO SIGN INTO MEMBER PAGE
// lab 10 example---------------------------


// SWITCH TO SIGN UP PAGE
function signUp(){
    
    window.location.href = 'http://localhost/fitness.html' + '#signUp';
    
}

// ADD PASSWORD
function addDigitToPassword(num){
    pass += num;
    var userPassword = document.getElementById("userPassword");
    encryptedPassword += "*";
    userPassword.value = encryptedPassword;
}

// DELETE ONE DIGIT OF PASSWORD
function deleteOneDigit(){
    pass = pass.substring(0,len(pass));
    encryptedPassword = encryptedPassword.substring(0,len(encryptedPassword));
    
    document.getElementById("userPassword").value = encryptedPassword;
}

// CLEAR PASSWORD
function clearPassword(){
    document.getElementById("userPassword").value = "";
    pass = ""
    encryptedPassword = "";

}


// PAGE TWO-------------------------------------------
// SIGN UP PAGE

function loginPage(){
    
}

// PAGE THREE-------------------------------------------
// MEMBER PAGE
function submitMuscleGroup(){
    var input = document.getElementById("muscleInput").value;
    
    var xhr = new XMLHttpRequest();
    xhr.onload = createList;
    xhr.open("GET", "member.php?q=" + input, true); 
    xhr.send();

}

function createList(){

// ARRAY
    //var json = JSON.parse(this.responseText);

    // MULTIPLE CHOICE
    for (var i = 0; i < json.choices.length; i++) {

        var option = document.createElement("option");
        option.innerHTML = json.choices[i].definition;
        
        
    }

}