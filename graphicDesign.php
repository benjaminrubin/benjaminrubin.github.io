<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="aboutMe.css">
    <link rel="stylesheet" type="text/css" href="myWork.css">
    <link rel="stylesheet" type="text/css" href="branja.css">
    <link rel="stylesheet" type="text/css" href="productDesign.css">
    <link rel="stylesheet" type="text/css" href="graphicDesign.css">

    <!-- for the gallery -->
<link rel="stylesheet" href="Gallery-master/css/blueimp-gallery.min.css">

    <!-- end of gallery -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90328546-2"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-90328546-2');
</script>

    <title>Benjamin Floyd Rubin</title>
</head>

<body onload="divLoad('graphicDesign');">

<?php require "navigation.html"; ?>

<div class="container-fluid">
    <div id="graphicDesignBox">
        <h1>GRAPHIC DESIGN GALLERY</h1>
        <div id="galleryBox">
            <div id="links">
                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>
                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>
                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>
                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>
                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>
                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>                <div class="galleryTab">
                    <a href="graphicDesign/craze.jpg" title="Craze">
                        <img class="galleryThumbnail"src="graphicDesign/thumbnails/craze.png" alt="Craze">
                    </a>
                </div>
            </div>
        
            </div>
             <div class="button clear">
        <label class="btn btn-primary myButton profileButton" id="workButton" onmouseup="navigate('myWork.php');">BACK<i class="material-icons icon" ">apps</i></label>
         </div>
        </div>
        <!-- lightbox code -->
        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <!-- end of lightbox code -->

    </div>
    
      
</div>


</body>
</html>
<script>
    //code for initializing gallery
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
<script src="Gallery-master/js/blueimp-gallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>