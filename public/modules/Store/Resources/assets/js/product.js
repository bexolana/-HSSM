$(document).ready(function () {

    function setSoftFileInput() {
        let product_type = $('#productType').val();
        if (product_type == '1') {
            $('#soft_file').fadeIn('slow');
        } else {
            $('#soft_file').fadeOut('slow');
        }
    }

    setSoftFileInput();
    $("#productType").on("change", function () {
        setSoftFileInput();
    });


    $('#is_free').change(function () {
        if ($('#is_free').is(':checked')) {
            $('.must_price').addClass('d-none');
        } else {
            $('.must_price').removeClass('d-none');
        }
    });

});

