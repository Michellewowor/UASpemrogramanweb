
const kelompokkami = document.querySelector("Nav");
const popup = document.querySelector(".popup-box");
const popupCloseBtn = popup.querySelector(".popup-close-btn");
const popupCloseIcon = popup.querySelector(".popup-close-icon");
kelompokkami.addEventListener("click", function(event){

    if(event.target.tagName.toLowerCase()=="a"){
        popupBox();
    } 
})

popupCloseBtn.addEventListener("click", popupBox);
popupCloseIcon.addEventListener("click", popupBox);
popup.addEventListener("click", function(event){
    if(event.target==popup){
        popupBox();
    }
})


function popupBox(){
popup.classList.toggle("open");
}

const menuToogle = document.querySelector('.menu-toogle input');
const nav = document.querySelector('Nav ul');
menuToogle.addEventListener('click', function(){
    nav.classList.toggle('slide');
});



const btn = document.querySelector('.read-more-btn');
const text = document.querySelector('.card__read-more');
const cardHolder = document.querySelector('.card-holder');

cardHolder.addEventListener('click', e => {

        const current = e.target;

        const isReadMoreBtn = current.className.includes('read-more-btn');

        if (!isReadMoreBtn)
            return;

        const currentText = e.target.parentNode.querySelector('.card__read-more');

        currentText.classList.toggle('card__read-more--open');

        current.textContent = current.textContent.includes('Read More') ? 'Read Less' : 'Read More';

    })


let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'admin.php';
};
    
