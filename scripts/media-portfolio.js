$(document).ready(function() {
    $('.thumbnail').click(function() {
        
        //remove the clicked class from all items containing
        // the class gallery-thumbnail
        var thumbnails = $('.thumbnail').toArray();
        for(var i = 0; i < thumbnails.length; i++){
        	// console.log(thumbnails[i]);
        	thumbnails[i].classList.remove("selected");
        }
        //add the class clicked to the thumbnail clicked on
        $(this).addClass("selected");
        //update the main image src with the thumbnail's image src
        $('.current-image').attr('src', $(this).attr('src'));
        //update the description with the thumbnail's alt
        // $('.gallery-image-description').html($(this).attr('alt'));
    });
});