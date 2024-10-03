// progressbar active
$(window).on('load', function (e) {
    $.each(
        $('.progress-bar'),
        function () {
            $(this).css('width', $(this).attr('aria-valuenow') + '%')
        }
    )
})

// close shedule dates
$(document).on('click', '#close_shedule', function (e) {
    $('.view_full_shedule, .bg-shade').fadeOut();
})

// price range slider
$("#price_range").ionRangeSlider({
    type: "double",
    grid: false,
    min: 1,
    max: 950,
    from: 1,
    to: 100,
    prefix: '$',
});

// age range slider
$("#instructor_age").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 100,
    from: 0,
    to: 60,
});
// BECOME TESTIMONIALS SLIDER ACTIVE JS
$('#become_testimonial_quotes').owlCarousel({
    nav: true,
    navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
    dots: false,
    autoplay: false,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    loop: true,
    margin: 0,
    items: 1,
    rtl: false,
    mouseDrag: true,
});
// time range slider
$("#time_range").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 23,
    from: 0,
    to: 23,
});

$(window).on('load', function (e) {
    $('.irs-min, .irs-max').remove();
})


// PRICE RANGE SLIDER
$("#price-range").slider({
    range: true,
    orientation: "horizontal",
    min: 0,
    max: 1000,
    values: [100, 300],
    slide: function (event, ui) {
        if (ui.values[0] == ui.values[1]) {
            return false;
        }
        $("#min_price").val(ui.values[0]);
        $("#max_price").val(ui.values[1]);
    },
});

// Cache selectors
var topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight() + 15,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });
$(window).scroll(function () {
    var fromTop = $(this).scrollTop() + topMenuHeight;
    var cur = scrollItems.map(function () {
        if ($(this).offset().top < fromTop)
            return this;
    });
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "about";
    menuItems
        .removeClass("active")
        .filter("[href='#" + id + "']").addClass("active");
});


// SHOW SCHEDULE POPUP
$(document).on('click', '[show-all-schedule]', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('.view_full_shedule, .bg-shade').fadeIn();
})

$(document).on('click', function (e) {
    if (!$(e.target).is('.view_full_shedule *')) {
        $('.view_full_shedule, .bg-shade').fadeOut();
    }
})
$(document).on('click', '.mobile_filter', function (e) {
    $('.course_category_chose').fadeIn('slow');
})
$(document).on('click', '.popupClose', function (e) {
    $('.course_category_chose').fadeOut('slow')
});
