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
                        <h1 class="text-uppercase">Solved Transaction List</h1>
                        <div class="bc-pages">
                            <a href="/dashboard.html">Dashboard</a>
                            <a href="/NewOrder">Transaction List</a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="admin-visitor-area up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">

                        <div class="col-lg-12 mb-30">
                            <div class="white_box">
                                <div class="white_box_tittle list_header mb-20">
                                    <h3 class="mb-0">Advanced Filter </h3>

                                </div>
                                <form action="https://SmmPortal.com/Catagory/course-list-search" method="POST"
                                    id="seacrh_course_content_form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="primary_input_label" for="Status">Status</label>
                                            <select class="primary_select" name="Status" id="Status">
                                                <option data-display="Select Catagory" value="">Status
                                                </option>
                                                <option value="1">Status</option>
                                                <option value="2">Status 2</option>
                                                <option value="3">Status 3</option>
                                                <option value="4">Status 4</option>
                                            </select>
                                        </div>

                                        <div class="col-12 mt-20">
                                            <div class="text-end">
                                                <a href="#" class="primary-btn radius_30px w-fit   fix-gr-bg"
                                                    id="filterCourse">Filter</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                <div class="container-fluid p-0">
                    <div class="white-box">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-md-flex">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">Solved Transaction List</h3>
                                      
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
                                                            <th scope="col">Aproved By</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>View Profile</td>
                                                            <td>test</td>
                                                            <td>test</td>
                                                            <td>test</td>
                                                            <td>test</td>
                                                            <td>Tensae</td>
                                                            <td>done / canceld</td>
                                                            
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