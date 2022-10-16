window.onload=function (){
    setTimeout(appeardiv,3000);
}

function appeardiv(){
    document.getElementById('cookie-box').style.display="block";
}

document.querySelector('.continueAsGuest').onclick=()=>{
    createCookie("guest","guest","1");
    document.querySelector('.cookie-box').style.display="none";
}

//Create a cookie which will send name of current active div to back-end side.This name
//will be used as a name of table in database from which data will be fetched
function createCookie(name,value,days){
    var expires;
    if(days){
        var date=new Date();
        date.setTime(date.getTime()+ (days*24*60*60*1000));
        expires="; expires="+ date.toUTCString();

    }

    else {
        expires = "";
    }

    document.cookie=escape(name)+"="+escape(value)+expires+"; path=/";

}

