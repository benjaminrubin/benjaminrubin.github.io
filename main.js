var fadeSpeed = 110;
var fadeSocial = 500;
var currentPage = "home"


function navigate(button) {

    // if (button.id != "productButton" && button.id != "graphicButton") {
    $("#social").fadeOut(fadeSpeed);
    // }

    wait(100);

    if (button.id == "homeButton") {

        if (currentPage == "about") {
            $("#aboutMe").fadeOut(fadeSpeed, function() {
                $("#header").fadeOut(fadeSpeed + 100, function() {
                    $("#home").fadeIn(fadeSpeed, function() {
                        $("#social").stop(true, true).fadeIn(fadeSocial);
                    });
                });
            });
        } else if (currentPage == "work") {
            $("#myWorkBox").fadeOut(fadeSpeed, function() {
                $("#header").fadeOut(fadeSpeed + 100, function() {
                    $("#home").fadeIn(fadeSpeed, function() {
                        $("#social").stop(true, true).fadeIn(fadeSocial);
                    });
                });
            });
        } else if (currentPage == "productDesign") {
            $("#backButtonBox").fadeOut(fadeSpeed, function() {
                $("#productBox").fadeOut(fadeSpeed, function() {
                    $("#header").fadeOut(fadeSpeed + 100, function() {
                        $("#home").fadeIn(fadeSpeed, function() {
                            $("#social").stop(true, true).fadeIn(fadeSocial);
                        });
                    });
                });
            });
        } else if (currentPage == "graphicDesign") {
            $("#backButtonBox").fadeOut(fadeSpeed, function() {
                $("#graphicBox").fadeOut(fadeSpeed, function() {
                    $("#header").fadeOut(fadeSpeed + 100, function() {
                        $("#home").fadeIn(fadeSpeed, function() {
                            $("#social").stop(true, true).fadeIn(fadeSocial);
                        });
                    });
                });
            });
        }


        currentPage = "home";
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

        if (currentPage == "home") {
            $("#home").fadeOut(fadeSpeed, function() {
                $("#myWorkBox").fadeIn(fadeSpeed, function() {
                    $("#workButtons").fadeIn(fadeSpeed, function() {
                        $("#header").fadeIn(fadeSpeed, function() {
                            $("#social").fadeIn(fadeSocial);
                        });
                    });
                });
            });
        }
        currentPage = "work";
    } else if (button.id == "productButton") {
        $("#myWorkBox").fadeOut(fadeSpeed, function() {
            $("#productBox").fadeIn(fadeSpeed, function() {
                $("#backButtonBox").fadeIn(fadeSpeed, function() {
                    // $("#social").fadeIn(fadeSocial);
                });
            });
        });

        currentPage = "productDesign";
    } else if (button.id == "graphicButton") {
        $("#myWorkBox").fadeOut(fadeSpeed, function() {
            $("#graphicBox").fadeIn(fadeSpeed, function() {
                $("#backButtonBox").fadeIn(fadeSpeed, function() {
                    // $("#social").fadeIn(fadeSocial);
                });
            });
        });

        currentPage = "graphicDesign";
    } else if (button.id == "backButton") {

        if (currentPage == "productDesign") {
            $("#backButtonBox").fadeOut(fadeSpeed, function() {
                $("#productBox").fadeOut(fadeSpeed, function() {
                    $("#myWorkBox").fadeIn(fadeSpeed, function() {
                    	 $("#social").stop(true, true).fadeIn(fadeSocial);
                    });
                });
            });

            currentPage = "work";
        } else if (currentPage == "graphicDesign") {
            $("#backButtonBox").fadeOut(fadeSpeed, function() {
                $("#graphicBox").fadeOut(fadeSpeed, function() {
                    $("#myWorkBox").fadeIn(fadeSpeed, function() {
                    	 $("#social").stop(true, true).fadeIn(fadeSocial);
                    });
                });
            });

            currentPage = "work";
        }
    }
    console.log("Current page is: " + currentPage);
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
    $("#social").fadeIn(fadeSocial);
}


//adding the shadow to header/navbar
window.onscroll = function() {
    var nav = document.getElementById('header');
    if (window.pageYOffset > 30) {
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