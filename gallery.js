function validateFirstForm(){
  window.location = "https://drive.google.com/file/d/1-q78u4kZ20jzAK0xLiOsORgOs3-coaiy/view";
}

function openModal() {
  document.getElementById("myModal").style.display = "block";
  // document.getElementById("fixingthenav").style.display = "none";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
  // document.getElementById("fixingthenav").style.display = "block";
}

function openModal1() {
  document.getElementById("myModal1").style.display = "block";
 
}

function closeModal1() {
  document.getElementById("myModal1").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function floarplanE(){
  document.getElementById("myModalE").style.display = "block";
}

function floarplanE1(){
  document.getElementById("myModalE1").style.display = "block";

}

function floarplanE2(){
  document.getElementById("myModalE2").style.display = "block";
}

function floarplanE3(){
  document.getElementById("myModalE3").style.display = "block";
}

function closeModalE(){
  document.getElementById("myModalE").style.display = "none";
}

function closeModalE1(){
  document.getElementById("myModalE1").style.display = "none";
}

function closeModalE2(){
  document.getElementById("myModalE2").style.display = "none";
}

function closeModalE3(){
  document.getElementById("myModalE3").style.display = "none";
}



function floarplanS(){
  document.getElementById("myModalS").style.display = "block";
}

function floarplanS1(){
  document.getElementById("myModalS1").style.display = "block";

}

function floarplanS2(){
  document.getElementById("myModalS2").style.display = "block";
}

function floarplanS3(){
  document.getElementById("myModalS3").style.display = "block";
}

function closeModalS(){
  document.getElementById("myModalS").style.display = "none";
}

function closeModalS1(){
  document.getElementById("myModalS1").style.display = "none";
}

function closeModalS2(){
  document.getElementById("myModalS2").style.display = "none";
}

function closeModalS3(){
  document.getElementById("myModalS3").style.display = "none";
}

// Exterior slider

function exteriorFirst(){
  document.getElementById("exterior1").style.display="block";
}

function exteriorTwo(){
  document.getElementById("exterior2").style.display="block";
}

function exteriorThree(){
  document.getElementById("exterior3").style.display="block";
}

function exteriorFour(){
  document.getElementById("exterior4").style.display="block";
}

function exteriorFive(){
  document.getElementById("exterior5").style.display="block";
}
function exteriorSix(){
  document.getElementById("exterior6").style.display="block";
}

function exteriorSeven(){
  document.getElementById("exterior7").style.display="block";
}




function closeExterior1(){
  document.getElementById("exterior1").style.display="none";
}


function closeExterior2(){
  document.getElementById("exterior2").style.display="none";
}


function closeExterior3(){
  document.getElementById("exterior3").style.display="none";
}

function closeExterior4(){
  document.getElementById("exterior4").style.display="none";
}


function closeExterior5(){
  document.getElementById("exterior5").style.display="none";
}


function closeExterior6(){
  document.getElementById("exterior6").style.display="none";
}

function closeExterior7(){
  document.getElementById("exterior7").style.display="none";
}


function mplan(){
  document.getElementById("mplan1").style.display="block";
 
}

function closemplan(){
  document.getElementById("mplan1").style.display="none";
}

function finalfloor(){
  window.location = "/Images/Assetz Marq 2_page-0017.jpg";
  document.getElementById("fplan1").style.display = "block";
}


function finalfloor1(){
  window.location = "/Images/Assetz Marq 2_page-0018.jpg";
 
}

function finalfloor2(){
  window.location = "/Images/Assetz Marq 2_page-0019.jpg";
}

function finalfloor3(){
  window.location = "/Images/Assetz Marq 2_page-0020.jpg";
}

function closefplan(){
  document.getElementById("fplan1").style.display="none";
}

function closefplan1(){
  document.getElementById("fplan2").style.display="none";
}


function closefplan2(){
  document.getElementById("fplan3").style.display="none";
}

function closefplan3(){
  document.getElementById("fplan4").style.display="none";
}


// Interior handeling

function interiorFirst(){
  document.getElementById("interior1").style.display="block";
}

function interiorTwo(){
  document.getElementById("interior2").style.display="block";
}

function interiorThree(){
  document.getElementById("interior3").style.display="block";
}

function interiorFour(){
  document.getElementById("interior4").style.display="block";
}


function closeInterior1(){
  document.getElementById("interior1").style.display="none";
}


function closeInterior2(){
  document.getElementById("interior2").style.display="none";
}


function closeInterior3(){
  document.getElementById("interior3").style.display="none";
}

function closeInterior4(){
  document.getElementById("interior4").style.display="none";
}