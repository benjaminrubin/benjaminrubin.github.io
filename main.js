
function navigate (button) {

	wait(200);

	if (button.id == "about") {
		document.getElementById("home").style.display = "none";
		document.getElementById("aboutMe").style.display = "block";


	}
	else if (button.id == "work") {
		


	}


}












function wait(ms){
   var start = new Date().getTime();
   var end = start;
   while(end < start + ms) {
     end = new Date().getTime();
  }
}