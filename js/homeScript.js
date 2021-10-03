/*Home Page SlideShow javasricpt*/

	var i = 0; // Start point of sricpt
	var images = [];
	var time = 2000;

	// Image List
	images[0] = "../images/1.jpg";
	images[1] = "../images/4.jpg";
	images[2] = "../images/3.jpg";
	images[3] = "../images/2.jpg";

	// Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;


