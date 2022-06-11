
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

    });

  
    let temp = ``;
    const buah = function(src, harga, des1, des2 ){
        return {
            src:src, 
            harga:harga,
            des1:des1,
            des2:des2
        }
    }

    function template(b){
        return  `  <div class="card">
        <img src="img/${b.src}.jpg" alt="pic" class="card__img">
  
        <div class="card-contents">
          <h1 class="card__name">${b.src}</h1>
          <div class="price">${b.harga}</div>
          <p>
            ${b.des1}
  
            <span class="card__read-more">${b.des2}</span>
          </p>
  
          <p class="read-more-btn">Read More</p>
  
        </div>
      </div>`;
    }

    let temp2 = [
                buah("Mangga", "Rp 25.000 /Kg", "Mangga atau mempelam adalah nama sejenis buah, demikian pula nama pohonnya. Mangga termasuk ke dalam marga Mangifera, yang terdiri dari 35-40 anggota dari suku Anacardiaceae.", 
                "Toko kami menyediakan macam jenis mangga, seperti mangga Madu, mangga Dodol, mangga Kuini dan mangga Gole."),
                buah("Jeruk", "Rp 45.000 /Kg", "Jeruk atau limau adalah semua tumbuhan berbunga anggota marga Citrus dari suku Rutaceae (suku jeruk-jerukan). Anggotanya rasa buahnya masam dan segar.", 
                "Toko kami menyediakan macam jenis jeruk, seperti jeruk Mandarin, jeruk Bali, jeruk Sunkist dan jeruk Medan."),
                buah("Rambutan", "Rp 10.000 /Kg", "Rambutan adalah tanaman tropis yang tergolong ke dalam suku lerak-lerakan atau Sapindaceae, berasal dari daerah kepulauan di Asia Tenggara. Rambutan banyak terdapat di daerah tropis", 
                "Toko kami menyediakan macam jenis rambutan, seperti rambutan Binjai, rambutan Rafia, rambutan Aceh dan rambutan Lebak Bulus."),
                buah("Manggis", "Rp 45.000 /Kg", "Manggis adalah sejenis pohon hijau abadi dari daerah tropika yang diyakini berasal dari Semenanjung Malaya dan menyebar ke Kepulauan Nusantara.", 
                "Toko kami menyediakan jenis jeruk, seperti jeruk Mandarin, jeruk Bali, jeruk Sunkist dan jeruk Medan."),
                buah("Salak", "Rp 30.000 /Kg", "Salak adalah sejenis palma dengan buah yang biasa dimakan. Ia dikenal juga sebagai sala. Dalam bahasa Inggris disebut salak atau snake fruit.", 
                "Toko kami menyediakan macam jenis manggis, seperti manggis Bali, manggis Kaligesing, manggis Ratu Tembilahan, manggis Wanayasa."),
                buah("Durian", "Rp 50.000 /Kg", "Durian adalah nama tumbuhan tropis yang berasal dari wilayah Asia Tenggara, sekaligus nama buahnya yang bisa dimakan. Nama ini diambil dari ciri khas kulit buahnya yang menyerupai duri. ", 
                "Toko kami menyediakan macam jenis durian, seperti durian Montong, durian Musang King, durian Mentega dan durian Bawor."),
                ];
    
    temp2.forEach(b => {
        temp += template(b);
    });

    $('.card-holder').html(temp);

    var kata = "";
    var srch = document.getElementById('search-btn');
    srch.addEventListener('click', function(){
        cari();
    });
    function cari(){
        temp = "";
        temp2.forEach(b => {
            if (b.src.toLowerCase().indexOf(kata.toLowerCase()) >-1 ){
                temp += template(b);
            }
            
        });
        $('.card-holder').html(temp);
    }
    var input = document.getElementById('search');
    input.addEventListener('change', function(){
        kata = this.value;

    });

    input.addEventListener("keyup", function () {
        cari();
    });
    