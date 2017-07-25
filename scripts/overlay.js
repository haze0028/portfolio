window.onload = gallery;

var currentImg = -1;
var images;

function gallery() {
	images = document.querySelectorAll(".work img");
	for (var i = 0; i < images.length; i++) {
		console.log(images[i]);
//		images[i].onclick = toggleOverlay;
		//add a number to each image
		images[1].setAttribute("data-number", i);
	}
}