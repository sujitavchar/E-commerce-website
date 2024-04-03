const bar=document.getElementById('bar');
const close=document.getElementById('close');
const nav=document.getElementById('navbar');

if(bar){
    bar.addEventListener('click',()=>{
        nav.classList.add('active')
    })
}
if(close){
    close.addEventListener('click',()=>{
        nav.classList.remove('active')
    })
}


/*----- Product page--------*/
var mainImg = document.getElementById("mainImg");
var smallImg = document.getElementsByClassName("small-img");

if (smallImg.length > 0) {
    for (var i = 0; i < smallImg.length; i++) {
        smallImg[i].addEventListener("click", function() {
            mainImg.src = this.src;  // 'this' refers to the clicked small image
        });
    }
}

console.log("JavaScript opened successfully");


