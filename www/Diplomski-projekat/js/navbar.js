// window.onload =function(){
//
//      if(window.localStorage.getItem('active-link')===null){
//          localStorage.setItem('active-link','id4');
//      }
//
//     else{
//     let status_of_link = window.localStorage.getItem('active-link');
//      console.log('Header: '+ status_of_link);
//     if(status_of_link==='id1')
//     {
//       localStorage.setItem('active-link','id4');
//         status_of_link = window.localStorage.getItem('active-link');
//      }
//     document.querySelector('.links-container .active-link').classList.remove('active-link');
//
//     let li_active=document.getElementById(status_of_link);
//     li_active.classList.add('active-link');
//
//    }
//
//
// if(window.localStorage.getItem('active-link-footer')===null){
//     localStorage.setItem('active-link-footer','id4');
//  }
//
//  else{
//      let status_of_link = window.localStorage.getItem('active-link-footer');
//     if(status_of_link==='id1')
//     {
//          localStorage.setItem('active-link-footer','id4');
//         status_of_link = window.localStorage.getItem('active-link-footer');
//     }
//      document.querySelector('.footer_ul .active-link').classList.remove('active-link');
//
//     let li_active=document.getElementById(status_of_link);
//      li_active.classList.add('active-link');
//
//  }
//
// }
//
//  var li=document.querySelectorAll('.links-container li');
// console.log(li);
//  li.forEach(e=>{
//
//      e.addEventListener('click',function(){
//
//       let id= this.id;
//      document.querySelector('.links-container .active-link').classList.remove('active-link');
//      e.classList.add('active-link');
//        localStorage.setItem('active-link',id);
//
//
//    })
//  })

// var footer_li=document.querySelectorAll('.footer_ul li');
// console.log(footer_li);
// footer_li.forEach(e=>{
//
//     e.addEventListener('click',function(){
//
//         let id= this.id;
//         document.querySelector('.footer_ul .active-link').classList.remove('active-link');
//         e.classList.add('active-link');
//         localStorage.setItem('active-link-footer',id);
//
//
//     })
// })




// window.onload = function(){
//     localStorage.removeItem('active-link');
//     if(localStorage.getItem('active-link')===null){
//         localStorage.setItem('active-link','id4');
//         console.log("Sad smo id4");
//         getActiveNavLink(localStorage.getItem('active-link'));
//     }
//
//     else{
//         getActiveNavLink(localStorage.getItem('active-link'));
//     }
//
//     localStorage.removeItem('active-link');
// }
//
//
// let list = document.querySelectorAll('.links-container li');
// list.forEach(e=>{
//     e.addEventListener('click',function(){
//         let id=this.id;
//         localStorage.setItem('active-link',id);
//         console.log(localStorage.getItem('active-link'));
//
//     })
// })
//
//
// function getActiveNavLink(id) {
//     console.log("Dio sa switchem0");
//     switch (id) {
//         case 'id1':
//             document.querySelectorAll('.links-container li')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li')[1].classList.remove('active-link');
//             document.getElementById('id1').classList.add('active-link');
//             document.getElementById('id5').classList.add('active-link');
//             break;
//         case 'id2':
//             document.querySelectorAll('.links-container li')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li')[1].classList.remove('active-link');
//             document.getElementById('id2').classList.add('active-link');
//             document.getElementById('id6').classList.add('active-link');
//             break;
//         case 'id3':
//             document.querySelectorAll('.links-container li')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li')[1].classList.remove('active-link');
//             document.getElementById('id3').classList.add('active-link');
//             document.getElementById('id7').classList.add('active-link');
//             break;
//         case 'id4':
//             document.querySelectorAll('.links-container li')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li')[1].classList.remove('active-link');
//             document.getElementById('id4').classList.add('active-link');
//             document.getElementById('id8').classList.add('active-link');
//             break;
//         case 'id5':
//             document.querySelectorAll('.links-container li.active-link')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li.active-link')[1].classList.remove('active-link');
//             document.getElementById('id1').classList.add('active-link');
//             document.getElementById('id5').classList.add('active-link');
//             break;
//         case 'id6':
//             document.querySelectorAll('.links-container li.active-link')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li.active-link')[1].classList.remove('active-link');
//             document.getElementById('id2').classList.add('active-link');
//             document.getElementById('id6').classList.add('active-link');
//             break;
//         case 'id7':
//             document.querySelectorAll('.links-container li.active-link')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li.active-link')[1].classList.remove('active-link');
//             document.getElementById('id2').classList.add('active-link');
//             document.getElementById('id6').classList.add('active-link');
//             break;
//         case 'id8':
//             document.querySelectorAll('.links-container li.active-link')[0].classList.remove('active-link');
//             document.querySelectorAll('.links-container li.active-link')[1].classList.remove('active-link');
//             document.getElementById('id4').classList.add('active-link');
//             document.getElementById('id8').classList.add('active-link');
//             break;
//
//         default :
//             break;
//     }
// }
//
//
