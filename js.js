var pass = "";
var encryptedPassword="";

// HOME PAGE----------------------------------------

// SUBMIT PASSWORD TO PHP
// TO SIGN INTO MEMBER PAGE
// lab 10 example---------------------------
function submitPassword(){
    var email = document.getElementById("userEmail").innerHTML;
    var pass = document.getElementById("UserPassword").innerHTML;

    // XHR REQUEST
}

function memberPage(){  
    // GO TO MEMBER PAGE
    newLocation = oldlocation + "#memberPage";
    window.location = newLocation;

}
// SWITCH TO SIGN UP PAGE
function signUp(){
    
    newLocation = location + "#signUpPage";
    window.location = newLocation;
    
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
}

// CLEAR PASSWORD
function clearPassword(){
    var userPass = document.getElementById("userPassword");
    pass = ""
    encryptedPassword = "";
    userPass.value = encryptedPassWord;
    document.getElementById("txtHint").innerHTML = "";
    document.getElementById("password").value = "";
}


// PAGE TWO-------------------------------------------
// SIGN UP PAGE
function create_member(){
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // CREATE JSON OBJECT
    var obj = {
        "fName": firstName,
        "lName": lastName,
        "em": email,
        "pass": password
    }

    // CREATE JSON STRING
    var str = JSON.stringify(obj);
    //alert(str);

    var hw = "hello world";
    

    // RETURN JSON STRING
    var request = new XMLHttpRequest();
    request.onload = loginPage;
    request.open("GET", "fitness.php?q=" + hw, true);
    request.send();

    // THIRD WAY WAS IN HTML CREATING A FORM AND BYPASSING THE WHOLE XML REQUEST

}
function loginPage(){
    document.getElementById("display").innerHTML = this.responseText;
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