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

<body onload="divLoad('aboutMe'); updatePadding();">

<?php require "navigation.html"; ?>

    <div class="container-fluid">
        <!-- about me -->
        <div id="aboutMe">
            <div id="aboutBox">
                <div id="bio">
                    <h1>ABOUT ME</h1>
                        <div class="instructions">
                            Last updated: Summer 2018
                        </div>
                     Here is my <a href="benjaminrubin_resume.pdf" target="_blank">resume</a> Originally born in Los Angeles, I've lived most of my life outside the United States. In particular, my late childhood and teenage years took place in a small city in the Central District of Israel called Rehovot. My primary and secondary education greatly benefited from the presence of the Weizmann Institute of Science, which brought advanced science, technology, and high standards of English into our schools' curriculums. After high school graduation I planned on returning to the US to pursue a college education, but had a slight delay and served for three years as a commander in the Israeli Air Force. Today I'm a senior majoring in Business Administration at the University of Southern California (USC), but as part of a novel program you most likely haven't heard of: the World Bachelor in Business (WBB). My sophomore and junior years were spent at the Hong Kong University of Science and Technology and Bocconi University in Milano, Italyrespectively. Aside from the amazing academic curriculum guided by renowned faculty and industry professionals, the WBB has fundamentally transformed me and shifted my mindset through experiences outside the classroom. From roaming the streets of Hong Kong Central with fellow students at the height of the Umbrella Revolution, to dancing at the Teatro Nuovo in Milano and showcasing the salsa skills I obtained from a local Latin dance school, the list of my adventures are myriad and unforgettable. Military trained in management and personally trained in graphic design and music, I look toward bringing my creativity and business acumen to the tech industry's table upon completion of my studies. Computer Science is an imperative piece to my puzzle, and I've chosen to remain at USC for an additional year to incorporate a minor from the Viterbi School of Engineering.
                </div>
            </div>
        </div>
    </div>
        <!-- end of about me -->
    <?php require "social.html"; ?>
</body>

</html>
<script>
function updatePadding() {
    // document.querySelector(".contentPadding").style.paddingTop = '90px';
}
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>