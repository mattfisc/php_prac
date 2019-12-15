var pass = "";

// HOMEPAGE-------------------

// SUBMIT PASSWORD TO PHP
// TO SIGN INTO MEMBER PAGE
function login(){
    var par = "hello world";
    var xhr = new XMLHttpRequest();
    xhr.open('POST','lab3.php?q=' + par,true);

    xhr.onload = function(){
        document.getElementById("display").innerHTML=this.responseText;
    }

    xhr.send();
}


// SWITCH TO SIGN UP PAGE
function signUp(){
    window.location.href = 'http://localhost/fitness.html' + '#signUp';
    
}

// ADD PASSWORD
function addDigitToPassword(num){
    pass += num;
    var userPassword = document.getElementById("userPass").value = pass;
}

// DELETE ONE DIGIT OF PASSWORD
function deleteOneDigit(){
    pass = pass.substring(0,len(pass));
    
    document.getElementById("userPass").value = pass;
}

// CLEAR PASSWORD
function clearPassword(){
    document.getElementById("userPass").value = "";
    pass = ""

}


// PAGE TWO--------------------
// SIGN UP PAGE



// PAGE THREE--------------------------
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
    var json = this.responseText;
    document.getElementById("displayMuscleGroup").innerHTML = json;
    

}


/*
var data = document.getElementById("data").addEventListener('click',myFunc);

function myFunc(){
    var xhr = new XMLHttpRequest();
    xhr.open('POST','lab3.php',true);
    console.log(xhr);

    xhr.onload = doThis;

    xhr.send();

}

function doThis(){
   
    if(this.status== 200){
        document.getElementById("display").innerHTML=this.responseText;
    }
    else{
        document.write("help file error");
    }
}
*/