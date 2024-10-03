(function ($) {
    "use strict";
    let _token = $('meta[name=_token]').attr('content');
    $(document).ready(function () {


        $(document).on('change', '.status_update', function (event) {
            event.preventDefault();
            let url = $('#user_groups_status_change_url').val();
            let id = $(this).val();
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    toastr.success(response.msg, 'Success');
                    resetAfterChange();
                },
                error: function (response) {
                    toastr.error(response.responseJSON.error);
                }
            });

        });


        $(document).on('click', '.assign_user_btn', function (event) {
            event.preventDefault();
            let url = $('#user_groups_assign_user_url').val();
            let id = $(this).data('id');
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    $('#append_html').html(response);
                    $("select[multiple].active.multypol_check_select").multiselect({
                        columns: 1, search: true, searchOptions: {}, selectAll: true,
                    });
                    $('#user_group_assign_user_modal').modal('show');
                },
                error: function (response) {
                    toastr.error(response.responseJSON.error);
                }
            });

        });


        $(document).on('submit', '#user_group_assign_user_form', function (event) {
            event.preventDefault();
            let formElement = $(this).serializeArray()
            let formData = new FormData();
            formElement.forEach(element => {
                formData.append(element.name, element.value);
            });
            formData.append('_token', _token);
            let url = $('#user_groups_assign_user_submit_url').val();
            resetValidationError();
            $.ajax({
                url: url,
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (response) {
                    summitBtnEnable();
                    $('#user_group_assign_user_modal').modal('hide');
                    toastr.success(response.msg, 'Success');
                    resetAfterChange();
                },
                error: function (response) {
                    summitBtnEnable();
                    showValidationErrorsAssignUsers('#user_group_assign_user_form', response.responseJSON.errors);
                }
            });
        });

        $(document).on('click', '#add_new_btn', function (event) {
            event.preventDefault();
            let url = $('#user_groups_create_url').val();
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    $('#append_html').html(response);
                    $("select[multiple].active.multypol_check_select").multiselect({
                        columns: 1, search: true, searchOptions: {}, selectAll: true,
                    });
                    $('#user_group_modal').modal('show');
                },
                error: function (response) {
                    toastr.error(response.responseJSON.error);
                }
            });

        });

        $(document).on('submit', '#user_group_create_form', function (event) {

            event.preventDefault();
            let formElement = $(this).serializeArray()
            let formData = new FormData();
            formElement.forEach(element => {
                formData.append(element.name, element.value);
            });

            formData.append('_token', _token);
            resetValidationError();
            $.ajax({
                url: $('#user_groups_store_url').val(),
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (response) {
                    create_form_reset();
                    summitBtnEnable();
                    $('#user_group_modal').modal('hide');
                    toastr.success(response.msg, 'Success');
                    resetAfterChange();
                },
                error: function (response) {
                    summitBtnEnable();
                    showValidationErrors('#user_group_create_form', response.responseJSON.errors);
                }
            });
        });

        $(document).on('click', '.user_group_edit', function (event) {
            event.preventDefault();
            let id = $(this).data('id');
            let url = $('#user_groups_edit_url').val();
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    $('#append_html').html(response);
                    $("select[multiple].active.multypol_check_select").multiselect({
                        columns: 1, search: true, searchOptions: {}, selectAll: true,
                    });
                    $('#user_group_modal').modal('show');
                },
                error: function (response) {
                    toastr.error(response.responseJSON.error);
                }
            });

        });

        $(document).on('submit', '#user_group_update_form', function (event) {
            event.preventDefault();
            let formElement = $(this).serializeArray()
            let formData = new FormData();
            formElement.forEach(element => {
                formData.append(element.name, element.value);
            });
            formData.append('_token', _token);
            let id = $('#rowId').val();
            let url = $('#user_groups_update_url').val();
            url = url.replace(':id', id);
            resetValidationError();
            $.ajax({
                url: url,
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (response) {
                    summitBtnEnable();
                    $('#user_group_modal').modal('hide');
                    toastr.success(response.msg, 'Success');
                    resetAfterChange();
                },
                error: function (response) {
                    summitBtnEnable();
                    showValidationErrors('#user_group_update_form', response.responseJSON.errors);
                }
            });
        });


        function resetAfterChange() {
            let table = $('#lms_table').DataTable();
            table.clearPipeline();
            table.ajax.reload();
        }

        function create_form_reset() {
            $('#user_group_create_form')[0].reset();
            $('.multypol_check_select').val('');
        }

        function showValidationErrors(formType, errors) {
            $(formType + ' #error_title').text(errors.title);
            $(formType + ' #error_discount').text(errors.discount);
            $(formType + ' #error_commission').text(errors.commission);
            $(formType + ' #error_users').text(errors.users);

        }

        function showValidationErrorsAssignUsers(formType, errors) {
            $(formType + ' #error_users').text(errors.users);

        }

        function resetValidationError() {
            $('#error_title').html('');
            $('#error_discount').html('');
            $('.error_commission').html('');
            $('.error_users').html('');
        }

        function summitBtnEnable() {
            $('button[type=submit]').prop('disabled', false);
        }


    });

})(jQuery);

dataTableOptions.serverSide = true
dataTableOptions.processing = true
dataTableOptions.ajax = $('#user_groups_datatable_url').val();
dataTableOptions.columns = [
    {data: 'DT_RowIndex', name: 'id', orderable: true},
    {data: 'title', name: 'title'},
    {data: 'discount', name: 'discount'},
    {data: 'commission', name: 'commission'},
    {data: 'users', name: 'users', orderable: false, searchable: false},
    {data: 'status', name: 'status', orderable: false, searchable: false},
    {data: 'action', name: 'action', orderable: false, searchable: false},
]
dataTableOptions = updateColumnExportOption(dataTableOptions, [0, 1, 2, 3, 4]);

let table = $('#lms_table').DataTable(dataTableOptions);
