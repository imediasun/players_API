jQuery(function ($) {
    var modal = $('.modal'),
        scroll = $("#content-container"),
        scroll2 = $("#neue-anfragen-cards");

    if(scroll) {
        scroll.mCustomScrollbar({
            // autoDraggerLength: false,
            mouseWheel:{
                scrollAmount: 150
            }
        });
    }

    if(scroll2) {
        scroll2.mCustomScrollbar({
            // autoDraggerLength: false,
            mouseWheel:{
                scrollAmount: 150
            }
        });
    }

    if(modal) {
        modal.on('show.bs.modal', function () {
            scroll.mCustomScrollbar('disable')
        });

        modal.on('hide.bs.modal', function () {
            scroll.mCustomScrollbar('update')
        });
    }

    var container = $('#container'),
        width = $(window).width();

    if(container && width <= 768) {
        container.addClass('mainnav-sm')
    }

})