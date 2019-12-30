var pass = "";
//var encryptedPassword="";

function submitPassword(){
    const xhr = new XMLHttpRequest();
    

    xhr.onload = function(){
        var output = "";
        var data = this.responseText;
        if(data!="invalid"){
            document.getElementById("secret").innerHTML = data;
        }
        else{
            output = "The password you entered is invalid. Please try again";
            document.getElementById("txtHint").innerHTML = output;
        }
    }

    xhr.open("POST", "lab10.php");
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send("p=".pass);

}

function addDigitToPassword(num){
    pass += num;
    
    //encryptedPassword += "*";
    document.getElementById("password").value = pass;
}

function clearPassword(){
    
    pass = ""
    encryptedPassword = "";
    document.getElementById("txtHint").innerHTML = "";
    document.getElementById("password").value = "";
}