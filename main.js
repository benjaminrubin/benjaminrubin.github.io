var fadeSpeed = 110;
var fadeSocial = 500;
var currentPage = "home"


function navigate(button) {

    $("#social").fadeOut(fadeSpeed);

    wait(100);

    if (button.id == "homeButton") {

        if (currentPage == "about") {
            $("#aboutMe").fadeOut(fadeSpeed, function() {
                $("#header").fadeOut(fadeSpeed, function() {
                    $("#home").fadeIn(fadeSpeed, function() {
                        $("#social").fadeIn(fadeSocial);
                    });
                });
            });
        }
        else if (currentPage == "work") {
            $("#myWork").fadeOut(fadeSpeed, function() {
                $("#header").fadeOut(fadeSpeed, function() {
                    $("#home").fadeIn(fadeSpeed, function() {
                        $("#social").fadeIn(fadeSocial);
                    });
                });
            });
        }
    }

    // navigating to about
    else if (button.id == "aboutButton") {
        $("#home").fadeOut(fadeSpeed, function() {
            $("#aboutMe").fadeIn(fadeSpeed);
            $("#header").fadeIn(fadeSpeed, function() {
                $("#social").fadeIn(fadeSocial);
            });
        });
        currentPage = "about";
    }

    // navigating to work
    else if (button.id == "workButton") {
        $("#home").fadeOut(fadeSpeed, function() {
            $("#myWork").fadeIn(fadeSpeed);
            $("#header").fadeIn(fadeSpeed, function() {
                $("#social").fadeIn(fadeSocial);
            });
        });
        currentPage = "work";
    }
}


var socialIcons = document.querySelectorAll(".socialIcon");

for (var i = 0; i < socialIcons.length; i++) {
    socialIcons[i].onclick = function() {
        if (this.id == "linkedin") {
            window.open("https://www.linkedin.com/in/benjaminfloydrubin/");
        } else if (this.id == "instagram") {
            window.open("https://www.instagram.com/benny__ruby/");
        } else if (this.id == "dribbble") {

            // window.open("https://www.instagram.com/benny__ruby/");
        }
    }
}


function divLoad() {
    // $("#details").fadeIn(600 , function(){
    // 	    $("#social").fadeIn(600);
    // });

    $("#details").fadeIn(600);
    $("#social").fadeIn(1600);
}

window.onscroll = function() {
    var nav = document.getElementById('header');
    if ( window.pageYOffset > 30 ) {
        nav.classList.add("headerShadow");
    } else {
        nav.classList.remove("headerShadow");
    }
}


function wait(ms) {
    var start = new Date().getTime();
    var end = start;
    while (end < start + ms) {
        end = new Date().getTime();
    }
}