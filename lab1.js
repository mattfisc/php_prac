const xhr = new XMLHttpRequest();

xhr.onload=function(){
    const serverResponse = document.getElementById("serverResponse");
    serverResponse.innerHTML = this.responseText;

}

xhr.open("POST","lab1.php");
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.send("name=domenic&message=how's it going");