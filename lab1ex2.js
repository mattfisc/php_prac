var data = document.getElementById("data").addEventListener('click',myFunc);

function myFunc(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET','play.txt',true);
    console.log(xhr);

    xhr.onreadystatechange = function(){
        console.log(xhr);
        if(xhr.readyState == 4 && xhr.status == 200){
            //document.getElementById("display").innerHTML= xhr.responseText;
        }
    }

    xhr.send();

}