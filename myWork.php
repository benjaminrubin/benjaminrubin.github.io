<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="aboutMe.css">
    <link rel="stylesheet" type="text/css" href="myWork.css">
    <link rel="stylesheet" type="text/css" href="branja.css">
    <link rel="stylesheet" type="text/css" href="productDesign.css">
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

<body onload="divLoad('productDesign');">

<?php require "navigation.html"; ?>

    <div class="container-fluid">
        <!-- my work -->
        

        <div id="productBox">
            <h1>MY WORK</h1>
            <div class="instructions">Click on a thumbnail to learn more</div>
            <div id="productBoxTabs">
                 <div class="productTab" onmouseup="navigate('graphicDesign.php');">
                    <div class="productTabScreen" style="padding-top: 60px;">
                        <div class="productTabName">Graphic Design Gallery</div>
                    </div>
                    <img src="images/graphic.PNG" alt="graphic design portfolio" class="productTabThumbnail" style="object-fit: cover;">
                </div>            
                <div class="productTab" onmouseup="navigate('branja.php');">
                    <div class="productTabScreen" style="padding-top: 80px;">
                        <div class="productTabName">Branja</div>
                    </div>
                    <img src="images/branja.jpg" alt="branja" class="productTabThumbnail">
                </div>
                <div class="productTab" onmouseup="window.open('https://303.itpwebdev.com/~benjamfr/student_page.html','_blank');">
                    <div class="productTabScreen" style="padding-top: 50px;">
                    <div class="productTabName">Full Stack Web Dev Course @ USC</div> 
                </div>
                    <img src="images/viterbi2.png" alt="usc fullstack course" class="productTabThumbnail">
                </div>
                <div class="productTab">
                    <div class="productTabScreen" style="padding-top: 60px;">
                        <div class="productTabName">Shalom Ethiopia<br>(Coming soon)</div>
                    </div>
                    <img src="https://cdn.shopify.com/s/files/1/0990/3102/products/LION_FLAG_b57c97dc-e572-49cf-af33-3b6010efb66e_large.jpg?v=1498505990" alt="branja" style="object-fit: cover; opacity: 0.8" class="productTabThumbnail"">
                </div>
            </div>
        </div>


<!--         <div id="myWorkBox">
            <h1>MY WORK</h1>
            <div id="workButtons">
                <div class="button">
                    <label class="btn btn-primary myButton workButton" id="productButton" onmouseup="navigate('productDesign.php');">WEB PROJECTS<i class="material-icons icon" style="color: #79d279;">apps</i></label>
                </div>
                <div class="button">
                    <label class="btn btn-primary myButton workButton" id="graphicButton" onmouseup="navigate('graphicDesign.php');">DESIGN GALLERY<i class="material-icons icon" style="color: #6699ff;">brush</i></label>
                </div>
            </div>
        </div> -->


    </div>
    <!-- end of mywork -->
    </div>
   
   <?php require "social.html"; ?>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>