//STANDARD ROOM
var currentImg = document.getElementById('currentImg');
var smallImgs = document.getElementsByClassName('smallImgs');

smallImgs[0].onclick = function(){
    currentImg.src = 'img/Standard Rooms1.jpg';
}
smallImgs[1].onclick = function(){
    currentImg.src = 'img/Standard Rooms2.jpg';
}
smallImgs[2].onclick = function(){
    currentImg.src = 'img/Standard Room3.png';
}

//DELUXE RO0M
var currentImg2 = document.getElementById('currentImg2');
var smallImgs2 = document.getElementsByClassName('smallImgs2');

smallImgs2[0].onclick = function(){
    currentImg2.src = 'img/deluxe room2.jpg';
}
smallImgs2[1].onclick = function(){
    currentImg2.src = 'img/deluxe room3.jpg';
}
smallImgs2[2].onclick = function(){
    currentImg2.src = 'img/deluxe room4.jpg';
}

//SUITE RO0M
var currentImg3 = document.getElementById('currentImg3');
var smallImgs3 = document.getElementsByClassName('smallImgs3');

smallImgs3[0].onclick = function(){
    currentImg3.src = 'img/suite room2.jpg';
}
smallImgs3[1].onclick = function(){
    currentImg3.src = 'img/suite room3.jpg';
}
smallImgs3[2].onclick = function(){
    currentImg3.src = 'img/suite room4.jpg';
}
//EXECUTIVE RO0M
var currentImg4 = document.getElementById('currentImg4');
var smallImgs4 = document.getElementsByClassName('smallImgs4');

smallImgs4[0].onclick = function(){
    currentImg4.src = 'img/executive rooms2.jpg';
}
smallImgs4[1].onclick = function(){
    currentImg4.src = 'img/executive room3.jpg';
}
smallImgs4[2].onclick = function(){
    currentImg4.src = 'img/executive room4.jpg';
}

//FAMILY RO0M
var currentImg5 = document.getElementById('currentImg5');
var smallImgs5 = document.getElementsByClassName('smallImgs5');

smallImgs5[0].onclick = function(){
    currentImg5.src = 'img/family room3.jpg';
}
smallImgs5[1].onclick = function(){
    currentImg5.src = 'img/family rooms2.jpg';
}
smallImgs5[2].onclick = function(){
    currentImg5.src = 'img/family room4.jpg';
}


//LOGIN/REGISTER ALERT

document.getElementById("bookNow").onclick = function book(){
    alert("Hay Nako Ang Pogi ko Talaga!");
}