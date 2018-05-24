var fadeSpeed = 110;


function navigate(button) {

    wait(100);

    if (button.id == "back") {
        // document.getElementById("home").style.display = "none";
        $("#aboutMe").fadeOut(fadeSpeed, function() {
            $("#header").fadeOut(fadeSpeed, function() {
                $("#home").fadeIn(fadeSpeed);
            });
        });
    } else if (button.id == "about") {
        // document.getElementById("home").style.display = "none";
        $("#home").fadeOut(fadeSpeed, function() {
            $("#aboutMe").fadeIn(fadeSpeed);
            $("#header").fadeIn(fadeSpeed);
        });
    } else if (button.id == "work") {

    }


}


var socialIcons = document.querySelectorAll(".socialIcon");

for (var i = 0; i < socialIcons.length; i++) {
    socialIcons[i].onclick = function() {
        if (this.id == "linkedin") {
            window.open("https://www.linkedin.com/in/benjaminfloydrubin/");
        }
        else if (this.id == "instagram") {
            window.open("https://www.instagram.com/benny__ruby/");
        }
        else if (this.id == "dribbble") {
        	
            // window.open("https://www.instagram.com/benny__ruby/");
        }
    }
}


function divLoad() {
    $("#details").fadeIn(900);
}


function wait(ms) {
    var start = new Date().getTime();
    var end = start;
    while (end < start + ms) {
        end = new Date().getTime();
    }
}