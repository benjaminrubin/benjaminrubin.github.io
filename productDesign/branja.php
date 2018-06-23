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

<body onload="divLoad('myWork');">

<?php require "navigation.html"; ?>

    <div class="container-fluid">
        <!-- my work -->
        <div id="myWorkBox">
            <div class="contentPadding"></div>
            <h1>MY WORK</h1>
            <div id="workButtons">
                <div class="button">
                    <label class="btn btn-primary myButton workButton" id="productButton" onmouseup="navigate(this);">PRODUCT DESIGN<i class="material-icons icon" style="color: #79d279;">apps</i></label>
                </div>
                <div class="button">
                    <label class="btn btn-primary myButton workButton" id="graphicButton" onmouseup="navigate(this);">GRAPHIC DESIGN<i class="material-icons icon" style="color: #6699ff;">brush</i></label>
                </div>
            <!-- <div id="software">
                Software Engineering
                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" version="1.1" height="64" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
                    <g>
                        <path fill="#1D1D1B" d="m63.386,16.193l.002-.002c0.002-0.003 0.004-0.006 0.006-0.01 0.172-0.195 0.298-0.43 0.399-0.678 0.032-0.076 0.053-0.148 0.076-0.225 0.058-0.191 0.094-0.389 0.106-0.596 0.006-0.076 0.018-0.148 0.016-0.226 0-0.04 0.01-0.076 0.008-0.115-0.014-0.239-0.062-0.47-0.136-0.687-0.006-0.023-0.022-0.041-0.03-0.064-0.088-0.239-0.214-0.451-0.363-0.645-0.021-0.027-0.028-0.063-0.05-0.09l-10.311-12.146c-0.789-0.93-2.084-0.948-2.894-0.037-0.808,0.91-0.823,2.402-0.032,3.334l5.558,6.549c-8.121-1.076-16.104,0.633-16.481,0.717-24.646,4.467-42.087,27.227-38.88,50.736 0.159,1.164 1.028,1.992 2.019,1.992 0.106,0 0.212-0.009 0.32-0.027 1.116-0.203 1.878-1.409 1.704-2.696-2.857-20.94 13.056-41.282 35.537-45.358 0.103-0.024 8.351-1.794 16.117-0.574l-8.577,5.093c-1.005,0.598-1.398,2.02-0.881,3.177 0.516,1.159 1.748,1.608 2.756,1.017l13.52-8.028c0.183-0.111 0.347-0.25 0.491-0.411z"></path>
                    </g>
                </svg>
            </div> -->
            </div>
        </div>
        <div id="productBox">
            <div class="contentPadding"></div>
            <h1>PRODUCT DESIGN</h1>
            <div id="productBoxTabs">
                <div class="productTab" id="branjaProduct" onmouseup="navigate(this);">
                    <div class="productTabName">Branja</div>
                    <img src="images/branja.jpg" alt="branja" class="productTabImage">
                </div>
            </div>
        </div>
        <div id="branja">
            <div class="contentPadding"></div>
            <h1>Branja</h1>
            <div id="branjaBody">
                This is branja. I will tell you all about it.
            </div>
        </div>
        <div id="graphicBox">
            <div class="contentPadding"></div>
            <h1>GRAPHIC DESIGN</h1>
            <div id="graphicBoxTabs">
                Coming Soon!
            </div>
        </div>
        <div id="backButtonBox">
            <div class="button">
                <label class="btn btn-primary myButton" id="backButton" onmouseup="navigate(this);">BACK</label>
            </div>
        </div>
    </div>
    <!-- end of mywork -->
    </div>
   
   <?php require "social.html"; ?>

</body>

</html>
<script>
// window.onload = function() {  // reload file every second
//  setInterval ( function() { location.reload(); } , 1000);
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