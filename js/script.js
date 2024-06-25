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
