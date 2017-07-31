
document.querySelector(".overlay-bg").onclick = function(){
	document.querySelector(".overlay-bg").style.display = "none";
}

document.querySelector(".close-overlay").onclick = function(){
	document.querySelector(".overlay-bg").style.display = "none";
}

document.querySelector(".thumbs").onclick = function(){
	document.querySelector(".overlay-bg").style.display = "block";	
}

//var currentImg = -1;
//var images;

//	images = document.querySelectorAll(".work img");
//	for (var i = 0; i < images.length; i++) {
//		console.log(images[i]);
//		images[i].onclick = toggleOverlay;
//		add a number to each image
//		images[1].setAttribute("data-number", i);
//	}