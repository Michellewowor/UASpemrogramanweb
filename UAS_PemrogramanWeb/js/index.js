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
