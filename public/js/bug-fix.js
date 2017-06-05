jQuery(function ($) {
    var modal = $('.modal'),
        scroll = $("#content-container");
    scroll.mCustomScrollbar({
        // autoDraggerLength: false,
        mouseWheel:{
            scrollAmount: 150
        }
    });

    modal.on('show.bs.modal', function () {
        scroll.mCustomScrollbar('disable')
    });

    modal.on('hide.bs.modal', function () {
        scroll.mCustomScrollbar('update')
    })

})