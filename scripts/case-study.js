//Case Study Image Gallery Functionality

$(document).ready(function() {
    $('.gallery-thumbnail').click(function() {
        
        //remove the clicked class from all items containing
        // the class gallery-thumbnail
        var thumbnails = $('.gallery-thumbnail').toArray();
        for(var i = 0; i < thumbnails.length; i++){
        	// console.log(thumbnails[i]);
        	thumbnails[i].classList.remove("clicked");
        }
        //add the class clicked to the thumbnail clicked on
        $(this).addClass("clicked");
        //update the main image src with the thumbnail's image src
        $('.gallery-main-image').attr('src', $(this).attr('src'));
        //update the description with the thumbnail's alt
        $('.gallery-image-description').html($(this).attr('alt'));
    });
});