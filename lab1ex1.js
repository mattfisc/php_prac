var data = document.getElementById("data").addEventListener('click',myFunc);

function myFunc(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET','play.tx',true);
    xhr.onload = function(){
        if(xhr.status== 200){
            document.write(this.responseText);
        }
        else if(xhr.status == 404){
            document.write("help file error");
        }
    }

    xhr.send();

}