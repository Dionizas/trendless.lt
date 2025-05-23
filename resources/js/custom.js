
document.addEventListener('DOMContentLoaded', function () {


    $('#nav-toggle').on('click', function() {

        if ($(this).parent().hasClass('mobile-on')) {
            $(this).parent().removeClass('mobile-on');
        } else {
            $(this).parent().addClass('mobile-on');
        }

    });


});


