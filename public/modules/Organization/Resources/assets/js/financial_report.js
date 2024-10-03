dataTableOptions.serverSide = true
dataTableOptions.processing = true

dataTableOptions.ajax = {
    url: $('#organization_financial_report_route').val(),
    data: function () {
        return {
            f_type: $('#f_type').val(),
            f_status: $('#f_status').val(),
            f_date: $('.date_range_input').val()
        };
    }
};

dataTableOptions.columns = [
    {data: 'DT_RowIndex', name: 'id'},
    {data: 'amount', name: 'amount'},
    {data: 'type', name: 'type'},
    {data: 'created_at', name: 'created_at'},
    {data: 'status', name: 'status'},
    {data: 'description', name: 'description', searchable: false}
];
let table = $('#lms_table').DataTable(dataTableOptions);
(function ($) {
    "use strict";
    $(document).ready(function () {


        $(document).on('change', '#f_type, #f_status', function (event) {
            event.preventDefault();
            resetAfterChange();
        });

        $(document).on('click', '.reset_btn', function (event) {
            event.preventDefault();
            $('#f_type').val('').niceSelect('update');
            $('#f_status').val('').niceSelect('update');
            $('.date_range_input').val('');
            resetAfterChange();
        });


        function resetAfterChange() {
            let table = $('#lms_table').DataTable();
            table.ajax.reload();
        }


    });

})(jQuery);

