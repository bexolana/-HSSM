let lang = window._locale;
let baseURL = $("#url").val();

$(document).ready(function () {
    $("#category_id").on("change", function () {
        var url = $("#url").val();
        console.log(url);

        var formData = {
            id: $(this).val(),
        };

        $.ajax({
            type: "GET",
            data: formData,
            dataType: "json",
            url: url + "/" + "store/product/ajaxGetProductSubCategory",
            success: function (data) {

                console.log(data);
                var model = $("#subcategory_id");
                model.empty();
                for (var i = 0; i < data.length; i++) {
                    console.log(data[i]);
                    model.append(new Option(data[i].title.en, data[i].id));
                }

                model.niceSelect('update');
            },
            error: function (data) {
                console.log("Error:", data);
            },
        });
    });


});


$(document).ready(function () {
    $(".edit_category_id").on("change", function () {
        var url = $("#url").val();


        var formData = {
            id: $(this).val(),
        };


        $.ajax({
            type: "GET",
            data: formData,
            dataType: "json",
            url: url + "/" + "store/product/ajaxGetProductSubCategory",
            success: function (data) {
                console.log(data);
                var model = $("#edit_subcategory_id");
                model.empty();
                for (var i = 0; i < data.length; i++) {
                    console.log(data[i]);
                    model.append(new Option(data[i].title.en, data[i].id));
                }


                model.niceSelect('update');

            },
            error: function (data) {
                console.log("Error:", data);
            },
        });

    });
});


$(document).ready(function () {
    $('#course_3').change(function () {
        if (this.checked) {
            $('#inventoryQntyDiv').fadeIn('slow');
            $('#WarnQntyDiv').fadeIn('slow');
        } else {
            $('#inventoryQntyDiv').fadeOut('slow');
            $('#WarnQntyDiv').fadeOut('slow');
        }
    });
});

$(document).ready(function () {
    $('#edit_course_3').change(function () {
        if (this.checked) {
            $('#edit_inventoryQntyDiv').fadeIn('slow');
            $('#edit_WarnQntyDiv').fadeIn('slow');
        } else {
            $('#edit_inventoryQntyDiv').fadeOut('slow');
            $('#edit_WarnQntyDiv').fadeOut('slow');
        }

    });
});


$(document).on('change', '#choice_attributes', function () {


    var a_id = $(this).val();
    var a_name = $(this).text();
    $('.preloader').removeClass('d-none');
    var exsist = $('#attribute_id_' + a_id).length;
    if (exsist > 0) {
        toastr.error("{{__('marketing.this_item_already_added_to_list')}}");
        $('.preloader').addClass('d-none');
        $('#choice_attributes').val('');
        $('#choice_attributes').niceSelect('update');
        return false;
    }
    getAttributeData(a_id);

});

function getAttributeData(a_id) {
    var url = $("#url").val();
    console.log(url);

    var formData = {
        id: a_id,
    };
    $.ajax({
        type: "GET",
        data: formData,
        dataType: "json",
        url: url + "/" + "store/product/getAttributeValues",
        success: function (data) {
            console.log(data);

            var model = $("#choice_options");

            model.empty();
            for (var i = 0; i < data.length; i++) {
                console.log(data[i]);
                model.append(new Option(data[i].value, data[i].id));
            }
            model.niceSelect('update');


        },
        error: function (data) {
            console.log("Error:", data);
        },
    });
}


$(document).on('change', '#choice_options', function () {

    let id = $(this).val();
    console.log(id);
    let name = $('#choice_options :selected').text();

    var model = $("#valueTable");


    model.append(`<div class="col-lg-12 variant_whole_sale_price_list">
    <div class="row mt-2">

        <input type="hidden" name="attributeValueId[]" id="attributeValueId" value="${id}">

        <div class="col">
            <input type="text" class="form-control primary_input_field" placeholder="Attribute Value" name="attributeValue" value="${name}">
        </div>
        <div class="col">
            <input type="text" class="form-control primary_input_field" placeholder="QTY" name="qty[]">
        </div>
        <div class="col">
            <input type="text" class="form-control primary_input_field" placeholder="PRICE" name="Value_price[]">
        </div>

        <div class="col">
            <button type="button" class="mt-2 style_plus_icon remove_variant_whole_sale border-0">
                <i class="ti-trash"></i>
            </button>
        </div>
    </div>
</div>`);

});

$(document).on('click', '.remove_variant_whole_sale', function () {
    $(this).parents('.variant_whole_sale_price_list').remove();
});

$(document).on('click', '.remove_edit', function () {
    $(this).parents('.variant_edit_row_lists').remove();
});


