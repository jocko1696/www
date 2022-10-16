


const  tabs = document.querySelectorAll('[data-tab-target]');
const  tabsContents = document.querySelectorAll('[data-tab-content]');

tabs.forEach(tab=>{
    tab.addEventListener('click',()=>{
        const target = document.querySelector(tab.dataset.tabTarget);
        tabsContents.forEach(tabContent =>{
            tabContent.classList.remove('is-active');

        })

        tabs.forEach(tab=>{
            tab.classList.remove('is-active');

        })
        tab.classList.add('is-active');
        target.classList.add('is-active');


        let active_div_name = $('div .content .is-active').attr('id');
        createCookie("table_name",active_div_name,"1");
        console.log(active_div_name);

        if(active_div_name==="home") {
            $('div .content .home').css("display","block");
            $('div .content .is-active').load('../admin/home.php');
        }

       else if(active_div_name==="admin-details")
        {
            $('div .content .home').css("display","none");
            $('div .content .is-active').load('../admin/admin-details.php');
        }

       else if(active_div_name==="users"){
            $('div .content .home').css("display","none");
            $('div .content .is-active').load('../admin/users.php');
        }

       else if(active_div_name==="guide"){
            $('div .content .home').css("display","none");
            $('div .content .is-active').load('../admin/guide.php');
        }

       else if(active_div_name==="help"){
            $('div .content .home').css("display","none");
            $('div .content .is-active').load('../admin/help.php');

        }

       else{
            $('div .content .home').css("display","none");
            $('div .content .is-active').load('../admin/avaliable-items.php');
        }





    })
})

//Create a cookie which will send name of current active div to back-end side.This name
//will be used as a name of table in database from which data will be fetched
function createCookie(name,value,days){
    let expires;
    if(days){
        let date=new Date();
        date.setTime(date.getTime()+ (days*24*60*60*1000));
        expires="; expires="+ date.toUTCString();

    }

    else {
        expires = "";
    }

    document.cookie=escape(name)+"="+escape(value)+expires+"; path=/";

}




function showScrollbar() {
    let list_of_items = document.querySelector('ul .list-of-items');
    let isHidden=list_of_items.style.display;

    if(isHidden==='none'){
        list_of_items.style.display='block';
    }

    else{
        list_of_items.style.display='none';
    }

}

function replaceDiv(){
    let old_item=document.getElementsByTagName('table');
    let newItem=document.createElement('div');
    newItem.innerHTML='<a class="link-item link username">Guest</a>';
    listItem.parentNode.replaceChild(newItem,listItem);

    listItem=document.querySelector('.bag-link');
    newItem=document.createElement('li');
    newItem.innerHTML='<a class="link-item link" href="../front-end/logout.php">Log out</a>';
    listItem.parentNode.replaceChild(newItem,listItem);
}


function loadHomePage()
{

    $('div .content .home').load('../admin/home.php');
    console.log('usao');

}

