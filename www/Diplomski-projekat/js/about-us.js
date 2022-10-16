
window.onload =function(){

    let status_of_link_footer = window.localStorage.getItem('active-link-footer');
    console.log('Footer'+ status_of_link_footer);
    if(status_of_link_footer==='idf1')
    {
        localStorage.setItem('active-link-footer','idf4');
        status_of_link_footer = window.localStorage.getItem('active-link-footer');
    }
    document.querySelector('.footer-ul .active-link').classList.remove('active-link');
    let li_active_footer=document.getElementById(status_of_link_footer);
    li_active_footer.classList.add('active-link');

}



var footer_li=document.querySelectorAll('.footer-ul li');
footer_li.forEach(e=>{

    e.addEventListener('click',function(){
        let id= this.id;
        document.querySelector('.footer-ul .active-link').classList.remove('active-link');
        e.classList.add('active-link');
        localStorage.setItem('active-link-footer',id);


    })
})