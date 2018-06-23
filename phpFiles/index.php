<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="aboutMe.css">
    <link rel="stylesheet" type="text/css" href="myWork.css">
    <link rel="stylesheet" type="text/css" href="branja.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90328546-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-90328546-2');
</script>

    <title>Benjamin Floyd Rubin</title>
</head>

<body onload="divLoad('home');">
    <div class="container-fluid">
        <!-- home -->
        <div id="home">
            <div id="profilePicHolder">
                <img src="images/profilepic3.JPG" alt="profile picture" id="profilePic">
            </div>
            <div id="profileInfo">
                <div id="details">
                    <span id="name">Benjamin Floyd Rubin</span>
                    <br/>
                    <span id="tagline">Product, UI/UX & Graphic Designer</span>
                    <br/>
                    <span id="location">📍Los Angeles, California</span>
                </div>
                <div id="profileButtons">
                    <div class="button">
                        <label class="btn btn-primary myButton profileButton" id="aboutButton" onmouseup="navigate('aboutMe.php');"><i class="material-icons icon" ;">account_box</i>ABOUT ME</label>
                    </div>
                    <div class="button">
                        <label class="btn btn-primary myButton profileButton" id="workButton" onmouseup="navigate('myWork.php');">MY WORK<i class="material-icons icon" ">apps</i></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of home -->
    </div>

<?php require "social.html"; ?>

</body>

</html>
<script>
// window.onload = function() {  // reload file every second
// 	setInterval ( function() { location.reload(); } , 1000);
// };
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- For help go to https://help.github.com/categories/github-pages-basics/ -->
<!-- Setting up my custom domain benjaminrubin.me go here: https://help.github.com/articles/using-a-custom-domain-with-github-pages/ -->