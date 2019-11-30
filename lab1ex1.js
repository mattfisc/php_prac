var data = document.getElementById("data").addEventListener('click',myFunc);

function myFunc(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET','play.txt',true);
    console.log(xhr);

    xhr.onload = function(){
        console.log(xhr);
        if(xhr.status== 200){
            //document.getElementById("display").innerHTML=xhr.responseText;
        }
        else{
            //document.write("help file error");
        }
    }

    xhr.send();

}