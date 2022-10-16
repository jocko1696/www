function changeImage(smallImg) {
    let fullImg = document.getElementById("image-box");
    fullImg.src = smallImg.src;
}

const sizeBtns = document.querySelectorAll('.size-radio-btn');
let checkedBtn = 0;

sizeBtns.forEach((item, i) => {
    item.addEventListener('click', () => {
        sizeBtns [checkedBtn].classList.remove('check');
        sizeBtns[checkedBtn].removeAttribute('checked');
        item.classList.add('check');
        item.setAttribute('checked', "");
        checkedBtn = i;

    })

})

function addToCart() {


    window.location.href = "../back-end/add-to-cart.php";


}

document.getElementById('x-mark').addEventListener('click', function () {
    document.getElementById('add-to-bag-div').classList.remove('active');
})