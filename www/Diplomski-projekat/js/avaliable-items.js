
function insertTable() {

window.location.href="../admin/insertTable.php";


}

function editTable(row)
{
        createCookie('id_num',row,1);
        window.location.href="../admin/editTable.php";
}

function deleteTable(row)
{
        createCookie('id_num_',row,1);
        window.location.href="../admin/deleteTable.php";
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

function closeForm()
{
    window.location.href="../admin/admin.php";
}

