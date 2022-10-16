
function insertTable() {

    window.location.href="../admin/insertUserTable.php";


}

function editTable(row)
{

    createCookie('user_id',row,1);
    window.location.href="../admin/updateUserTable.php";
}

function deleteTable(row)
{

    createCookie('user_id_',row,1);
    window.location.href="../admin/deleteUserTable.php";
}


function closeForm()
{

    window.location.href="../admin/admin.php";
}
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
