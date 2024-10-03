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
                        <h1 class="text-uppercase">Sales Category</h1>
                        <div class="bc-pages">
                            <a href="/dashboard">Dashboard</a>
                            <a href="SalesCategory">Sales Category</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="admin-visitor-area up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="row">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="form_div" class="col-lg-3">
                            <div class="row">
                                <div id="formHtml" class="col-lg-12">
                                    <div class="white-box">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-title">
                                                    <h3 class="mb-20">Add New</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="#" id="add_form">
                                            <div class="add-visitor">
                                                <div class="row">
                                                    <input type="hidden" name="form_type" value="1">
                                                    <div class="col-lg-12">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label" for="name">Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="primary_input_field" type="text" id="name"
                                                                name="name" autocomplete="off" value=""
                                                                placeholder="Name">
                                                            <span class="text-danger" id="error_name"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label" for="Price">Price <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="primary_input_field" type="text" id="Price"
                                                                name="Price" autocomplete="off" value=""
                                                                placeholder="Price">
                                                            <span class="text-danger" id="error_Price"></span>
                                                        </div>
                                                    </div>
                                                

                                                </div>
                                                <div class="row mt-40">
                                                    <div class="col-lg-12 text-center">
                                                        <button id="submit_btn" type="submit"
                                                            class="primary-btn fix-gr-bg" data-bs-toggle="tooltip"
                                                            title="" data-original-title="">
                                                            <i class="ti-check"></i>
                                                            Save </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">

                            <div class="white-box">
                                <div class="row ">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="main-title">
                                                    <h3 class="mb-20">Category List</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div id="item_table">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="QA_section QA_section_heading_custom check_box_table">
                                                        <div class="QA_table">
                                                            <div class="">
                                                                <table class="table Crm_table_active3">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="15%" scope="col" class=" text-center">SL</th>
                                                                            <th width="35%" scope="col" class="">Catagory Name</th>
                                                                            <th width="20%" scope="col" class="">Price</th>
                                                                            <th width="30%" scope="col" class="">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="sku_tbody">
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>youtube</td>
                                                                            <td>233</td>
                                                                            <td>

                                                                                <div class="dropdown CRM_dropdown">
                                                                                    <button
                                                                                        class="btn btn-secondary dropdown-toggle"
                                                                                        type="button" id="dropdownMenu2"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false">
                                                                                        Select
                                                                                    </button>
                                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                                                                        <a data-value="1" class="dropdown-item edit_category">Edit</a>
                                                                                        <a href="#" class="dropdown-item delete_category"
                                                                                            data-value="1">Delete</a>
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

                    </div>
                </div>
            </section>

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


    <script src="js/app7b4a.js?v=7.1.0"></script>

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