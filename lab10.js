var pass = "";
var encryptedPassword="";

function submitPassword(){
    var myXMLRequest = new XMLHttpRequest();
    myXMLRequest.onload = displayPHPresults;
    myXMLRequest.open("POST", "lab10.php?q=" + pass, true);

    myXMLRequest.send();

}

function displayPHPresults(){
    var output = "";
    var data = this.responseText;
    if(data!="invalid"){
        var newLocation = lacation + "#pageMessage";
        window.location = newLocation;
        document.getElementById("secret").innerHTML = data;
    }
    else{
        output = "The password you entered is invalid. Please try again";
        document.getElementById("txtHint").innerHTML = output;
    }
}

function addDigitToPassword(num){
    pass += num;
    var userPassword = document.getElementById("password");
    encryptedPassword += "*";
    userPassword.value = encryptedPassword;
}

function clearPassword(){
    var userPass = document.getElementById("password");
    pass = ""
    encryptedPassword = "";
    userPass.value = encryptedPassWord;
    document.getElementById("txtHint").innerHTML = "";
}