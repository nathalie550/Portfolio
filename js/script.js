jQuery(document).ready(function ($) {
    console.log('Document is ready');

    $('#myBtn').click(function () {
        console.log('Button clicked');

        var dots = $('#dots');
        var moreText = $('#more');
        var btnText = $('#myBtn');

        console.log('Current dots display:', dots.css('display'));
        console.log('Current moreText display:', moreText.css('display'));

        if (dots.css('display') === 'none') {
            console.log('Setting dots to inline and moreText to none');
            dots.css('display', 'inline');
            btnText.text('Lire la suite');
            moreText.css('display', 'none');
        } else {
            console.log('Setting dots to none and moreText to inline');
            dots.css('display', 'none');
            btnText.text('Lire moins');
            moreText.css('display', 'inline');
        }
    });
});


/*********************PAGE HOME SECTION LOISIRS******************************************/
document.addEventListener('DOMContentLoaded', function () {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
});

