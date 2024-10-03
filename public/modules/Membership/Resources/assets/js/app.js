$(document).ready(function () {
    let status = false;
    divHideSHow(status);

    $(document).on('click', '#all_level_member', function () {
        let status = $(this).is(':checked');
        divHideSHow(status);
    });

    function divHideSHow(status) {

        if (status == true) {
            $('#membership_level_div').addClass('d-none');
            $('#membership_level_member_div').addClass('d-none');
        } else {
            $('#membership_level_div').removeClass('d-none');
            $('#membership_level_member_div').removeClass('d-none');
        }
    }

    $(document).on('click', '#save_button_parent', function (event) {
        let status = $('#all_level_member').is(':checked');
        if (status == true) {
            let members = $('#membership_level_members').val();
            if (members == '') {
                toastr.error("Members Filed Can't be Empty");
                return;
                event.preventDefault();
            }
        }
    })
    $("#membership_level").on("change", function () {
        $("#checkbox").prop("checked", false);
        var url = $("#url").val();
        let level_id = $(this).val();

        var formData = {
            level_id: level_id,
        };

        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: "json",
            url: url + "/" + "membership/course/get-level-member",
            success: function (data) {
                var a = "";
                $("#membership_level_members").empty();
                $("#membership_level_member_div .infix_ul_lists li").empty();

                $.each(data, function (key, value) {
                    $.each(value, function (i, member) {
                        $("#membership_level_members").append(
                            $("<option>", {
                                value: member.id,
                                text: member.name,
                            })
                        );

                        $("#membership_level_member_div .infix_ul_lists").append(' <li data-search-term="' + member.name + '">\n' +
                            '                        <label for="ms-opt-user-' + member.id + '">\n' +
                            '                            <span class="checkmark"></span>\n' +
                            '                            <input  type="checkbox" title="' + member.name + '" id="ms-opt-user-' + member.id + '" value="' + member.id + '"">' + member.name + '</label></li>');


                    });
                });


            },
            error: function (data) {
                console.log("Error:", data);
            },
        });
        $('select[multiple]').multiselect('reset');
    });
});
