

// HOME PAGE----------------------------------------

// SUBMIT PASSWORD TO PHP
// TO SIGN INTO MEMBER PAGE
// lab 10 example---------------------------
function submitPassword(){
    var email = document.getElementById("userEmail").innerHTML;
    var pass = document.getElementById("UserPassword").innerHTML;

    var myXMLRequest = new XMLHttpRequest();
    myXMLRequest.onload = logIn;
    myXMLRequest.open("POST", "fitness.js" + email + pass, true);
    myXMLRequest.send();
}

function logIn(){  
    // GO TO MEMBER PAGE
    var newLocation = "#memberPage";
    window.location = newLocation;

}
// SWITCH TO SIGN UP PAGE
function signUp(){
    var newLocation = "#signUpPage";
    window.location = newLocation;
}

// ADD BUTTON
function addDigitToPassword(num){

}

// DELETE BUTTON
function deleteButton(){

}


// PAGE TWO-------------------------------------------
// SIGN UP PAGE
function create_member(){
    
}
function changeTologinPage(){

    var newLocation = location + "#homePage";
    window.location = newLocation;


}

// PAGE THREE-------------------------------------------
// MEMBER PAGE
function submitMuscleGroup(){
    // GET WORK OUTS
    var muscleGroup = document.getElementById("muscleInput")

    // GET DISPLAY
    var display = document.getElementById("displayMuscleGroup").innerHTML;
    // DISPLAY ON HTML
    display = "";
}