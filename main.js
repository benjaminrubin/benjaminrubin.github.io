
function navigate (button) {

	wait(100);

	if (button.id == "about") {
		// document.getElementById("home").style.display = "none";
		$("#home").fadeOut(200, function() {
			$("#aboutMe").fadeIn(200);
		});
		// wait(500);
		// document.getElementById("aboutMe").style.display = "block";


	}
	else if (button.id == "work") {

	}


}


function divLoad() {
	$("#details").fadeIn(900);
}











function wait(ms){
   var start = new Date().getTime();
   var end = start;
   while(end < start + ms) {
     end = new Date().getTime();
  }
}