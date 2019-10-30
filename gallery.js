function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
  // document.getElementById("fixingthenav").style.display = "block";
}


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}


function openFloorPlan(){
  document.getElementById("myModal1").style.display= "block";
 
}

function closeModalFloor() {
  document.getElementById("myModal1").style.display = "none";
}


var slideIndex = 1;
showSlidesFloor(slideIndex);

// Next/previous controls
function plusSlidesFloor(n) {
  showSlidesFloor(slideIndex += n);
}

function showSlidesFloor(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesFloor");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}


function showinterior(){
  document.getElementById("myModal2").style.display= "block";
 
}

function closeModalInterior() {
  document.getElementById("myModal2").style.display = "none";
}


var slideIndex = 1;
showSlidesInterior(slideIndex);

// Next/previous controls
function plusSlidesInterior(n) {
  showSlidesInterior(slideIndex += n);
}

function showSlidesInterior(n) {
  var i;
  var slides = document.getElementsByClassName("myslidesInterior");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}


function exterior(){
  document.getElementById("myModal3").style.display= "block";
 
}

function closeModalExterior() {
  document.getElementById("myModal3").style.display = "none";
}


var slideIndex = 1;
showSlidesExterior(slideIndex);

// Next/previous controls
function plusSlidesExterior(n) {
  showSlidesExterior(slideIndex += n);
}

function showSlidesExterior(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesExterior");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}



let win = $(window).width();
console.log(win);

if(win < 420){
  document.querySelector(".navbar-toggler").style.display= "none";
  document.querySelector(".navbar-brand").style.marginLeft = "154px";
  $('#bc').click(function(){
    console.log("hi");
    $('html, body').animate({scrollTop:1250}, 'slow');
    return false;
  });
  $('#fg').click(function(){
    $('html, body').animate({scrollTop:4660}, 'slow');
    return false;
  });
  
  
  $('#ef').click(function(){
    $('html, body').animate({scrollTop:4050}, 'slow');
    return false;
  });
  
  $('#ij').click(function(){
    $('html, body').animate({scrollTop:2350}, 'slow');
    return false;
  });
  
  
  $('#cd').click(function(){
    $('html, body').animate({scrollTop:2000}, 'slow');
    return false;
  });
}
else {
$('#fg').click(function(){
  $('html, body').animate({scrollTop:2360}, 'slow');
  return false;
});


$('#ef').click(function(){
  $('html, body').animate({scrollTop:2000}, 'slow');
  return false;
});

$('#ij').click(function(){
  $('html, body').animate({scrollTop:1400}, 'slow');
  return false;
});


$('#cd').click(function(){
  $('html, body').animate({scrollTop:1000}, 'slow');
  return false;
});
}


