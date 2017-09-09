/**
 Custom module for you to write your own javascript functions
 **/
var Anfragen = function () {

    // private functions & variables

    var content = $(".clients_blocks");
    var elements = $(".client_block");

    var sortByDate = function (elements, order) {
        var arr = [];
        elements.each(function () {
            var obj = {},
                $el = $(this),
                time = $el.find(".date_").text(),
                date = new Date($.trim(time)),
                timestamp = date.getTime();

            obj.html = $el[0].outerHTML;
            obj.time = timestamp;

            arr.push(obj);
        });

        var sorted = arr.sort(function (a, b) {

            if (order == "ASC") {
                return a.time > b.time;
            } else {
                return b.time > a.time;
            }

        });

        return sorted;
    };


    var colorit = function () {
        $('#order_date').css('color', '#3da5ea');
        $('#post_index_sort').css('color', '#b9c5cd');
    };

    var newer = function () {
        colorit();
        content.html('');
        var elements_sorted = sortByDate(elements, "DESC");
        var html = "";
        for (var i = 0; i < elements_sorted.length; ++i) {
            html += elements_sorted[i].html;
        }
        content.html(html);
        publish();
        $('#order_date').one("click", function() {
            older();
        });

    };

    var older = function () {
        colorit();
        content.html('');
        var elements_sorted = sortByDate(elements, "ASC");
        var html = "";
        for (var i = 0; i < elements_sorted.length; ++i) {
            html += elements_sorted[i].html;
        }

        content.html(html);
        $('#order_date').one("click", function () {
            newer();
        });
        publish();
    };

    var sortByIndex = function (elements, order) {
        var arr = [];
        elements.each(function () {
            var obj = {},
                $el = $(this),
                index = $el.find(".post_index").text();

            obj.html = $el[0].outerHTML;
            obj.index = index;

            arr.push(obj);
        });

        var sorted = arr.sort(function (a, b) {

            if (order == "ASC") {
                return a.index > b.index;
            } else {
                return b.index > a.index;
            }

        });

        return sorted;
    };

    var colored = function () {
        $('#post_index_sort').css('color', '#3da5ea');
        $('#order_date').css('color', '#b9c5cd');
    };

    var bigest = function () {
        colored();
        content.html('');
        var elements_sorted = sortByIndex(elements, "DESC");
        var html = "";
        for (var i = 0; i < elements_sorted.length; ++i) {
            html += elements_sorted[i].html;
        }

        content.html(html);
        $('#post_index_sort').one("click", function () {
            smaller();
        });
        publish();
    };

    var smaller = function () {
        colored();
        content.html('');
        var elements_sorted = sortByIndex(elements, "ASC");
        var html = "";
        for (var i = 0; i < elements_sorted.length; ++i) {
            html += elements_sorted[i].html;
        }

        content.html(html);
        $('#post_index_sort').one("click", function () {
            bigest();
        });
        publish();
    };

    var service = function () {

        $('.service').change(function () {
            var clas = $(this).val();
            if ($(this).is(':checked')) {
                $('.' + clas).each(function () {
                    $('.' + clas).show();
                });
            } else {
                $('.' + clas).each(function () {
                    $('.' + clas).hide();
                });
            }
        });
    };

    var all_services = function () {

        $('#all_services').on('click', function () {

            var checkBoxes = $(".service");
            checkBoxes.prop("checked", !checkBoxes.prop("checked")).trigger('change');

        });

    };

    var sorting_by_index = function () {

        $('#index_sort').on('keyup', function () {

            var input = $(this).val();
            var length = input.length;

            $('.post_index').each(function () {

                var index = $(this).text();
                var res = index.substring(0, length);

                if (res !== input) {
                    $(this).closest('.client_block').hide();
                } else {
                    $(this).closest('.client_block').show();
                }

            });
        });
    };

    var sortByPublish = function (elements) {

        var arr = [];
        elements.each(function () {
            var obj = {},
                $el = $(this),
                published = $el.find("input.ofentlich").attr('checked');

            obj.html = $el[0].outerHTML;
            obj.published = published;

                if (published === 'checked') {
                    arr.push(obj);
                } else {
                    arr.unshift(obj);
                }
        });

        return arr;
    };

    var sorting_by_published = function () {

        $('#published').on('change', function () {

            if($(this).is(':checked')){
                content.html('');
                var elements_sorted = sortByPublish(elements);
                var html = "";
                for (var i = 0; i < elements_sorted.length; ++i) {
                    html += elements_sorted[i].html;
                }
                content.html(html);
            }else{
                content.html('');
                content.html(elements);
            }
            publish();
        });
    };

    var publish = function () {

        $('input.js-switch').each(function () {
            $(this).siblings('.switchery').remove();
        });

        jscheck();

        $('.publish').on('change', function () {

            var id_active = $(this).parent().find('.hidden_active').val();
            if ($(this).is(':checked')) {
                $.ajax({
                    type: 'POST',
                    url: '/admin/change_active_client',
                    data: {id_active: id_active, activity: 1},
                    success: function (data) {

                    }
                });
            }
            else {
                $.ajax({
                    type: 'POST',
                    url: '/admin/change_active_client',
                    data: {id_active: id_active, activity: 0},
                    success: function (data) {

                    }
                });

            }
        });

        questions();

    };

    var jscheck = function () {

        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });

    };

    var questions = function () {

        $('.scroll_btn').on('click', function(){

            if($(this).hasClass('active')){
                $(this).parent().find('.questions').css('display','none');
                $(this).removeClass('active');
            }
            else{

                $(this).parent().find('.questions').css('display','block');
                $(this).addClass('active');
            }
        });
    };

    // public functions
    return {

        //main function
        init: function () {
            //initialize here something.

            publish();
            service();
            sorting_by_index();
            all_services();
            sorting_by_published();


            $("#post_index_sort").one('click', function () {
                bigest();
            });
            $("#order_date").one('click', function () {
                newer();
            });

        },

        //some helper function
        delete_client: function (e) {
            var id_active = $(e).parent().find('.hidden_active').val();
            var r = confirm("Löschen Sie die Bestellung?");
            if (r == true) {
                $.ajax({
                    type: 'POST',
                    url: '/admin/delete_client',
                    data: {id_active: id_active},
                    success: function (data) {
                        if (data) {
                            var id = 'client' + data;
                            $('#' + id).remove();
                        }
                    }
                });
            }
        }
    };

}();

jQuery(document).ready(function () {
    Anfragen.init();
});

/***
 Usage
 ***/
//Anfragen.delete_client();