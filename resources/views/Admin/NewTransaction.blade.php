@include('common.adminhead')

<body class="admin">
  
<input type="hidden" name="url" id="url" value="https://SmmPortal.com">
<input type="hidden" name="csrf_token" class="csrf_token" value="{{ csrf_token() }}">
    <div class="main-wrapper" style="min-height: 600px">
       
        @include('common.adminsidebar')


        <div id="main-content" class="">
            <section class="sms-breadcrumb mb-10 white-box">
                <div class="container-fluid p-0">
                    <div class="d-flex flex-wrap justify-content-between">
                        <h1 class="text-uppercase">New Transaction List</h1>
                        <div class="bc-pages">
                            <a href="/dashboard.html">Dashboard</a>
                            <a href="/NewOrder">New Transaction List</a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="admin-visitor-area up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">

                
                <div class="container-fluid p-0">
                    <div class="white-box">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-md-flex">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">New Transaction</h3>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="QA_section QA_section_heading_custom check_box_table">
                                    <div class="QA_table">
                                        <div class="" id="item_table">
                                            <div class="">
                                                <!-- table-responsive -->
                                                <table class="table Crm_table_active3">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">User</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Bank Type</th>
                                                            <th scope="col">Transaction ID</th>
                                                            <th scope="col">Created at</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>View Profile</td>
                                                            <td>test</td>
                                                            <td>test</td>
                                                            <td>test</td>
                                                            <td>12/12/2020</td>
                                                            <td>
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu16" data-bs-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu16">
                                                                <a onclick="approve_modal('#');" class="dropdown-item approve_brand">Approve</a>
                                                                <a onclick="reject_modal('#');" class="dropdown-item reject_brand">Reject</a>
                                                                </div>
                                                            </div>

                                                        </td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                    </div>
                </div>
            </section>

            
            <script>
                function approve_modal(delete_url) {
                    jQuery('#confirm-approve').modal('show', { backdrop: 'static' });
                    document.getElementById('approve_link').setAttribute('href', approve_url);
                }
                function reject_modal(delete_url) {
                    jQuery('#confirm-reject').modal('show', { backdrop: 'static' });
                    document.getElementById('reject_link').setAttribute('href', reject_url);
                }
            </script>
           <div class="modal fade admin-query" id="confirm-approve">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Balance Confirmation</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">Make sure the Amount!!</h3>
                            <div class="col-xl-12">
                        <div class="primary_input mb-25">
                            <input name="number" id="nameInput" class="primary_input_field name " placeholder="Amount Number" type="text" value="">
                        </div>
                        </div>
                            <div class="col-lg-12 text-center">
                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg" data-bs-dismiss="modal">Cancel</button>
                                    <a id="Confirm_link" class="primary-btn semi_large2 fix-gr-bg">Confirm </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade admin-query" id="confirm-reject">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Reject Balance</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">Comment Box</h3>
                            <div class="col-xl-12">
                        <div class="primary_input mb-25">
                            <input name="number" id="nameInput" class="primary_input_field name " placeholder="Resion for the reject" type="text" value="">
                        </div>
                        </div>
                            <div class="col-lg-12 text-center">
                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg" data-bs-dismiss="modal">Cancel</button>
                                    <a id="Confirm_link" class="primary-btn semi_large2 fix-gr-bg">Reject</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                function confirm_modal(delete_url) {
                    jQuery('#confirm-delete').modal('show', { backdrop: 'static' });
                    document.getElementById('delete_link').setAttribute('href', delete_url);
                }
            </script>

      

            <footer class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mt-5 footer-copyright">
                            <p class="p-3 mb-0">Copyright © 2024. All rights reserved | Made By Tensae </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="backend/js/datatable_extra.js" type="application/javascript"></script>
    <script src="backend/js/plugin.js" type="application/javascript"></script>



    <script>
        if ($('.Crm_table_active3').length) {
            let datatable = $('.Crm_table_active3').DataTable(dataTableOptions);

            $(".selectAllQuiz").on("click", function () {
                let totalQuestions = $('#totalQuestions');
                let totalMarks = $('#totalMarks');

                if ($(this).is(':checked')) {
                    datatable.$("input[type='checkbox']").prop('checked', true);
                } else {
                    datatable.$("input[type='checkbox']").prop('checked', false);
                }
                let online_exam_id = $('#online_exam_id').val();
                let ques_assign = $('.ques_assign').val();
                let token = $('.csrf_token').val();
                var myCheckboxes = [];
                datatable.$("input[type='checkbox']").each(function () {
                    if ($(this).is(':checked')) {
                        myCheckboxes.push($(this).val());
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: ques_assign,
                    data: {
                        '_token': token,
                        online_exam_id: online_exam_id,
                        questions: myCheckboxes,
                    },
                    success: function (data) {
                        totalQuestions.html(data.totalQus);
                        totalMarks.html(data.totalMarks);
                        toastr.success('Successfully Assign', 'Success');
                    },
                    error: function (data) {
                        toastr.error('Something Went Wrong', 'Error')
                    }
                });
            });

        }
    </script>

  
    <script>
        $('.dataTables_length label select').niceSelect();
        $('.dataTables_length label .nice-select').addClass('dataTable_select');
        $(document).on('click', '.dataTables_length label .nice-select', function () {
            $(this).toggleClass('open_selectlist');
        })
    </script>


</body>

</html>