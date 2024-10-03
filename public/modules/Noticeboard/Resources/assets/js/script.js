"use strict";
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on("click", ".editType", function () {
    $('#noticeTypeId').val($(this).data('id'))
    $('#noticeTitle').val($(this).data('title'))
    $('#noticeColor').val($(this).data('color'))
    $('#editType').modal('show');
});

$(document).on("click", ".deleteType", function () {
    $('#noticeTypeDeleteId').val($(this).data('id'))
    $('#deleteType').modal('show');
});


$(document).on("click", ".editCourseNotice", function () {
    let id = $(this).data('id');
    $('#noticeId').val(id);
    const findByIdNameURL = $('#findByIdName').val();
    $.ajax({
        type: 'POST', url: findByIdNameURL, data: {id: id}, success: function (data) {
            $('#editNotice').html(data);
            $('#editNotice').modal('show');
            $('#editType').niceSelect();
            // summernoteInit($('#editMessage'), '#editMessage');

            $('#editMessage').summernote({
                tabsize: 2,
                height: 200,
                tooltip: true,
                callbacks: {
                    onImageUpload: function (files) {
                        sendFile(files, '#editMessage', $('#editMessage').attr('name'))
                    }
                }
            });
            $("select[multiple].active.multypol_check_select").multiselect({});
        }
    });


});

$(document).on("click", ".deleteCourseNotice", function () {
    $('#noticeDeleteId').val($(this).data('id'))
    $('#deleteNotice').modal('show');
});
