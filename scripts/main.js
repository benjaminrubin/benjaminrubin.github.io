var fadeSpeed = 170;

// clicking on a profile button
$('#about-btn').click(function() {
    // if it doesn't contain the off class, then remove it
    $(this).removeClass("off").addClass("on");
    $('#project-box').fadeOut(fadeSpeed, function() {
        $('#about').fadeIn(fadeSpeed);
    });



    if ($('#work-btn').hasClass("on")) {
        $('#work-btn').removeClass("on").addClass("off");
    }
});

$('#work-btn').click(function() {
    // if it doesn't contain the off class, then remove it
    $(this).removeClass("off").addClass("on");
    $('#about').fadeOut(fadeSpeed, function() {
        $('#project-box').fadeIn(fadeSpeed);
    });

    if ($('#about-btn').hasClass("on")) {
        $('#about-btn').removeClass("on").addClass("off");
    }
});


//Loading the homepage with the work section open
$(document).ready(function() {
    var pathname = window.location.href;
    var parameters = pathname.split("?")[1];
    if (parameters.length != 0) {
        var parsed = parse_query_string(parameters);
        for (var first in parsed) {
            if (parsed[first] == "work") {
                $("#work-btn").removeClass("off").addClass("on");
                $('#project-box').fadeIn(fadeSpeed);


            }
        }
    }
});


//Parsing the URL's query string
function parse_query_string(query) {
    var vars = query.split("&");
    var query_string = {};
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        var key = decodeURIComponent(pair[0]);
        var value = decodeURIComponent(pair[1]);
        // If first entry with this name
        if (typeof query_string[key] === "undefined") {
            query_string[key] = decodeURIComponent(value);
            // If second entry with this name
        } else if (typeof query_string[key] === "string") {
            var arr = [query_string[key], decodeURIComponent(value)];
            query_string[key] = arr;
            // If third or later entry with this name
        } else {
            query_string[key].push(decodeURIComponent(value));
        }
    }
    return query_string;
}


// var fadeSpeed = 210;
// var fadeSocial = 500;
// var currentPage = "home"


// function navigate(page) {

//     if(page == "benjaminrubin_resume.pdf"){
//         window.open(page, '_blank');
//     }
//     else{
//         window.open(page, '_self');
//     }
// }


// function openSocial(button){
//     console.log("in here")
//     if (button.id == "linkedin") {
//             window.open("https://www.linkedin.com/in/benjaminfloydrubin/");
//         } else if (button.id == "instagram") {
//             window.open("https://www.instagram.com/benny__ruby/");
//         } else if (button.id == "dribbble") {
//             window.open("https://dribbble.com/bnjmnrbn");
//         } else if (button.id == "github") {
//             window.open("https://github.com/benjaminrubin");
//         }
// }

// // var socialIcons = document.querySelectorAll(".socialIcon");

// // for (var i = 0; i < socialIcons.length; i++) {
// //     socialIcons[i].onclick = function() {
// //         if (this.id == "linkedin") {
// //             window.open("https://www.linkedin.com/in/benjaminfloydrubin/");
// //         } else if (this.id == "instagram") {
// //             window.open("https://www.instagram.com/benny__ruby/");
// //         } else if (this.id == "dribbble") {
// //             window.open("https://dribbble.com/bnjmnrbn");
// //         } else if (this.id == "github") {
// //             window.open("https://github.com/benjaminrubin");
// //         }
// //     }
// // }

// function divLoad(page) {
//     if (page == "home") {
//      $("#profilePicHolder").fadeIn(200);
//         $("#profileInfo").fadeIn(200, function() {
//             $("#social").fadeIn(fadeSocial);
//         });
//     } else if (page == "aboutMe") {
//      $("#header").fadeIn(fadeSpeed, function() {
//             $("#aboutMe").fadeIn(fadeSpeed, function() {
//                  $("#social").fadeIn(fadeSocial);    
//             });
//         });
//     } else if (page == "myWork") {
//      $("#header").fadeIn(fadeSpeed, function() {
//             $("#projectBox").fadeIn(fadeSpeed, function() {
//                  $("#social").fadeIn(fadeSocial);    
//             });
//         });
//     } else if (page == "graphicDesign") {
//      $("#header").fadeIn(fadeSpeed, function() {
//             $("#graphicDesignBox").fadeIn(fadeSpeed, function() {
//                  $("#social").fadeIn(fadeSocial);    
//             });
//         });
//     } else if (page == "caseStudy") {
//      $("#header").fadeIn(fadeSpeed, function() {
//             $("#caseBox").fadeIn(fadeSpeed);
//         });
//     } else if (page == "contact") {
//      $("#header").fadeIn(fadeSpeed, function() {
//             $("#contactBox").fadeIn(fadeSpeed, function() {
//              $("#social").fadeIn(fadeSocial);
//             });
//         });
//     }
// }


// //adding the shadow to header/navbar when scrolling
// window.onscroll = function() {
//     var nav = document.getElementById('header');
//     if (window.pageYOffset > 17) {
//         nav.classList.add("headerShadow");
//     } else {
//         nav.classList.remove("headerShadow");
//     }
// }


// //function that stalls the execution of code
// function wait(ms) {
//     var start = new Date().getTime();
//     var end = start;
//     while (end < start + ms) {
//         end = new Date().getTime();
//     }
// }


// function openMenu() {
//     $("#mobileMenu").fadeIn(150);
// }
// function closeMenu() {
//     $("#mobileMenu").fadeOut(150);
// }
// $(document).mouseup(function(e) 
// {
//     var container = $("#mobileMenu");

//     // if the target of the click isn't the container nor a descendant of the container
//     if (!container.is(e.target) && container.has(e.target).length === 0) 
//     {
//         container.hide();
//     }
// });



//     // if (button.id == "aboutButton")




//     // wait(100);

//     // if (button.id == "homeButton") {

//     //     if (currentPage == "about") {
//     //         $("#aboutMe").fadeOut(fadeSpeed, function() {
//     //             $("#header").fadeOut(fadeSpeed + 100, function() {
//     //                 $("#home").fadeIn(fadeSpeed, function() {
//     //                     $("#social").stop(true, true).fadeIn(fadeSocial);
//     //                 });
//     //             });
//     //         });
//     //     } else if (currentPage == "work") {
//     //         $("#myWorkBox").fadeOut(fadeSpeed, function() {
//     //             $("#header").fadeOut(fadeSpeed + 100, function() {
//     //                 $("#home").fadeIn(fadeSpeed, function() {
//     //                     $("#social").stop(true, true).fadeIn(fadeSocial);
//     //                 });
//     //             });
//     //         });
//     //     } else if (currentPage == "productDesign") {
//     //         $("#backButtonBox").fadeOut(fadeSpeed, function() {
//     //             $("#productBox").fadeOut(fadeSpeed, function() {
//     //                 $("#header").fadeOut(fadeSpeed + 100, function() {
//     //                     $("#home").fadeIn(fadeSpeed, function() {
//     //                         $("#social").stop(true, true).fadeIn(fadeSocial);
//     //                     });
//     //                 });
//     //             });
//     //         });
//     //     } else if (currentPage == "graphicDesign") {
//     //         $("#backButtonBox").fadeOut(fadeSpeed, function() {
//     //             $("#graphicBox").fadeOut(fadeSpeed, function() {
//     //                 $("#header").fadeOut(fadeSpeed + 100, function() {
//     //                     $("#home").fadeIn(fadeSpeed, function() {
//     //                         $("#social").stop(true, true).fadeIn(fadeSocial);
//     //                     });
//     //                 });
//     //             });
//     //         });
//     //     }
//     //     currentPage = "home";
//     // }
//     // // navigating to about
//     // else if (button.id == "aboutButton") {
//     //     $("#home").fadeOut(fadeSpeed, function() {
//     //         $("#header").fadeIn(fadeSpeed, function() {
//     //             $("#aboutMe").fadeIn(fadeSpeed, function() {
//     //                 $("#social").fadeIn(fadeSocial);
//     //             });
//     //         });
//     //     });
//     //     currentPage = "about";
//     // }

//     // // navigating to work
//     // else if (button.id == "workButton") {

//     //     if (currentPage == "home") {
//     //         $("#home").fadeOut(fadeSpeed, function() {
//     //             $("#myWorkBox").fadeIn(fadeSpeed, function() {
//     //                 $("#workButtons").fadeIn(fadeSpeed, function() {
//     //                     $("#header").fadeIn(fadeSpeed, function() {
//     //                         $("#social").fadeIn(fadeSocial);
//     //                     });
//     //                 });
//     //             });
//     //         });
//     //     }
//     //     currentPage = "work";
//     // } else if (button.id == "productButton") {
//     //     $("#myWorkBox").fadeOut(fadeSpeed, function() {
//     //         $("#productBox").fadeIn(fadeSpeed, function() {
//     //             $("#backButtonBox").fadeIn(fadeSpeed, function() {});
//     //         });
//     //     });

//     //     currentPage = "productDesign";
//     // } else if (button.id == "graphicButton") {
//     //     $("#myWorkBox").fadeOut(fadeSpeed, function() {
//     //         $("#graphicBox").fadeIn(fadeSpeed, function() {
//     //             $("#backButtonBox").fadeIn(fadeSpeed, function() {});
//     //         });
//     //     });

//     //     currentPage = "graphicDesign";
//     // } else if (button.id == "backButton") {

//     //     if (currentPage == "productDesign") {
//     //         $("#backButtonBox").fadeOut(fadeSpeed, function() {
//     //             $("#productBox").fadeOut(fadeSpeed, function() {
//     //                 $("#myWorkBox").fadeIn(fadeSpeed, function() {
//     //                     $("#social").stop(true, true).fadeIn(fadeSocial);
//     //                 });
//     //             });
//     //         });

//     //         currentPage = "work";
//     //     } else if (currentPage == "graphicDesign") {
//     //         $("#backButtonBox").fadeOut(fadeSpeed, function() {
//     //             $("#graphicBox").fadeOut(fadeSpeed, function() {
//     //                 $("#myWorkBox").fadeIn(fadeSpeed, function() {
//     //                     $("#social").stop(true, true).fadeIn(fadeSocial);
//     //                 });
//     //             });
//     //         });

//     //         currentPage = "work";
//     //     } else if (currentPage.includes("Product")) {
//     //         navigateProducts("#branja", "#productBox");
//     //         currentPage = "productDesign";
//     //     }
//     // } else if (button.id.includes("Product")) {
//     //     if (button.id.includes("branja")) {
//     //         navigateProducts("#productBox", "#branja");
//     //         currentPage = "branjaProduct";
//     //     }
//     // }

//     // console.log("Current page is: " + currentPage);