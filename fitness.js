

// HOME PAGE----------------------------------------

// SUBMIT PASSWORD TO PHP
// TO SIGN INTO MEMBER PAGE
// lab 10 example---------------------------
function submitPassword(){
    var myXMLRequest = new XMLHttpRequest();
    myXMLRequest.onload = logIn;
    myXMLRequest.open("POST", "fitness.js" + email + pass, true);
    myXMLRequest.send();
}
function logIn(){  
    // GO TO MEMBER PAGE
    var newLocation = location + "#memberPage";
    window.location = newLocation;

}
// SWITCH TO SIGN UP PAGE
function signUp(){
    var newLocation = location + "#signUpPage";
    window.location = newLocation;
}

// DELETE BUTTON
function deleteButton(){

}


// PAGE TWO-------------------------------------------
// SIGN UP PAGE
function create_member(){
    // LINK TO PHP
    var myXMLRequest = new XMLHttpRequest();
    myXMLRequest.onload = logIn;
    myXMLRequest.open("POST", "fitness.js" + email + pass, true);
    myXMLRequest.send();

    // GET VALUES
    var firstName = document.getElementById("firstName").innerHTML;
    var lastName = document.getElementById("lastName").innerHTML;
    var email = document.getElementById("email").innerHTML;
    var password = document.getElementById("password").innerHTML;

    // test
    console.log(firstName);
    // CREATE MEMBER ON TABLE




    var newLocation = "#homePage";
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