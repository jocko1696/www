
// window.onload =function(){
//
//   let status_of_link = window.localStorage.getItem('active-link');
//   console.log('Header'+ status_of_link);
//     if(status_of_link==='id1')
//     {
//         localStorage.setItem('active-link','id4');
//         status_of_link = window.localStorage.getItem('active-link');
//     }
//   document.querySelector('.links-container .active-link').classList.remove('active-link');
//   let li_active=document.getElementById(status_of_link);
//   li_active.classList.add('active-link');
//
// }


var searchBox=document.getElementById("search-bar");
var Icon=document.getElementsByClassName("submit")[0];

Icon.onclick=function(){
    searchBox.classList.toggle("active");
}



// var li=document.querySelectorAll('.links-container li');
// li.forEach(e=>{
//
//     e.addEventListener('click',function(){
//         let id= this.id;
//         document.querySelector('.links-container .active-link').classList.remove('active-link');
//         e.classList.add('active-link');
//         localStorage.setItem('active-link',id);
//
//     })
// })