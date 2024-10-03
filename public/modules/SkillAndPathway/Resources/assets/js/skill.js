$(document).ready(function () {
    $(".select_pathway_group").on('change', function () {
        let selected_group = $(this).val();
        let pathway_id = $(this).data('pathway_id');
        let url = $('#url').val();
        var formData = {
            id: selected_group
        };
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'skillandpathway/ajaxGetSubGroups',
            success: function (data) {
                // console.log(data);
                var a = '';
                $.each(data, function (i, item) {
                    $(`#subGroupDiv${pathway_id} ul`).empty();
                    if (item.length) {
                        $('#subGroupId' + pathway_id).find('option').not(':first').remove();
                        $(`#subGroupDiv${pathway_id} ul`).find('li').not(':first').remove();

                        $.each(item, function (i, section) {
                            $('#subGroupId' + pathway_id).append($('<option>', {
                                value: section.id,
                                text: section.name
                            }));

                            $(`#subGroupDiv${pathway_id} ul`).append("<li data-value='" + section.id + "' class='option'>" + section.name + "</li>");
                        });
                    } else {
                        $(`#subGroupDiv${pathway_id} .current`).html('SECTION *');
                        $('#subGroupId' + pathway_id).find('option').not(':first').remove();
                        $(`#subGroupDiv${pathway_id} ul`).find('li').not(':first').remove();
                    }
                });
                console.log(a);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    $('.select_group_type').on('change', function () {
        let type = $(this).val();
        let select_group = $('.select_group');
        let groups_section = $('.groups_section');
        let sub_groups_section = $('.sub_groups_section');
        let group_required = $('.group_required');
        let sub_group_required = $('.sub_group_required');
        if (type == "" || type == 1) {
            groups_section.show();
            sub_groups_section.hide();
            group_required.show();
            sub_group_required.hide();
            select_group.addClass('col-xl-6')
            select_group.removeClass('col-xl-4')
        } else {
            groups_section.show();
            sub_groups_section.show();
            group_required.show();
            sub_group_required.show();
            select_group.addClass('col-xl-4')
            select_group.removeClass('col-xl-6')
        }
    });

    $('.select_group_type').trigger('change');

});
