@include('common.adminhead')

<body class="admin">
<input type="hidden" name="url" id="url" value="https://habesha.com">
<input type="hidden" name="csrf_token" class="csrf_token" value="{{ csrf_token() }}">
    <div class="main-wrapper" style="min-height: 600px">
        @include('common.adminsidebar')


        <div id="main-content" class="">

         



            <section class="sms-breadcrumb mb-10 white-box">
                <div class="container-fluid p-0">
                    <div class="d-flex flex-wrap justify-content-between">
                        <h1 class="text-uppercase">Manager</h1>
                        <div class="bc-pages">
                            <a href="/dashboard">Dashboard</a>
                            <a href="/ManagerList">List Manager</a>
                        </div>
                    </div>
                </div>
            </section>



            <section class="admin-visitor-area up_st_admin_visitor">

                <div id="add_item_modal">
                    <div class="modal fade" id="item_add">
                        <div class="modal-dialog modal_800px modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        <span>Add New</span>
                                        Manager
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        <i class="ti-close "></i>
                                    </button>
                                </div>

                                <div class="modal-body item_create_form">

                                    <form enctype="multipart/form-data" id="item_create_form">
                                        <div class="row">
                                            <input type="hidden" name="id" id="item_id">
                        


                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label" for="">Full Name <span class="required_mark">*</span></label>
                                                    <input name="name" class="primary_input_field name" id="name" placeholder="Name" type="text" required="1">
                                                    <span class="text-danger" id="name_error"></span>
                                                </div>

                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label" for="">Email <span class="required_mark">*</span></label>
                                                    <input name="Email" class="primary_input_field Email" id="Email" placeholder="Email" type="text" required="1">
                                                    <span class="text-danger" id="Email_error"></span>
                                                </div>

                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label" for="">Phone Number <span class="required_mark">*</span></label>
                                                    <input name="Phone Numeber" class="primary_input_field Phone Number" id="Phone Number" placeholder="Phone Number" type="Number" required="1">
                                                    <span class="text-danger" id="Phone Number_error"></span>
                                                </div>

                                                <div class="col-xl-12">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label" for="role">Role<strong class="text-danger">*</strong></label>
                                                <select class="primary_select mb-25" name="role" id="role">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    
                                                </select>
                                            </div>
                                        </div>



                                            </div>


                                           
                                            <div class="col-lg-12 text-center">
                                                <div class="d-flex justify-content-center pt_20">
                                                    <button type="submit" class="primary-btn semi_large2 fix-gr-bg"><i
                                                            class="ti-check"></i>
                                                        Save
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container-fluid p-0">
                    <div class="white-box">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-md-flex">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">Manager List</h3>
                                        <ul class="d-flex">
                                            <li>
                                                <button class="primary-btn radius_30px   fix-gr-bg"
                                                    onclick="createModalShow()"><i class="ti-plus"></i>Add New Manager
                                                </button>
                                            </li>
                                        </ul>

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
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><div>
                                                                <img style="max-width: 200px" src="demo/brand/1.png" alt="" class="img img-responsive m-2">
                                                            </div>
                                                        </td>
                                                            <td>test</td>
                                                            <td>test@gmail.com</td>
                                                            <td>0929292827</td>
                                                            <td>Admin</td>
                                                            <td class="nowrap">
                                                            <div>
                                                                <label class="switch_toggle">
                                                                    <input type="checkbox" class="status_enable_disable" checked value="6">
                                                                    <i class="slider round"></i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu16" data-bs-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu16">
                                                                <a onclick="view_modal('#');" class="dropdown-item view_brand">View</a>
                                                                <a onclick="edit_modal('#');" class="dropdown-item edit_brand">Edit</a>
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



    <script>
        var baseUrl = $('#app_base_url').val();
        $(document).ready(function () {

            $('#item_create_form').on('submit', function (event) {
                event.preventDefault();
                let formData = new FormData(this);
                let url = '';

                if (formData.get('id') == '') {
                    url = "/allstudent";
                } else {
                    url = "/allstudent";
                }

                formData.append('_token', "{{ csrf_token() }}");
                $.ajax({
                    url: url,
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function (response) {
                        if (response.success) {
                            resetAfterChange(response.TableData)
                            toastr.success(response.success)
                            $('#item_add').modal('hide');
                        } else {
                            toastr.error(response.error);
                        }
                    },
                    error: function (response) {
                        showValidationErrors('.item_create_form', response.responseJSON.errors);
                    }
                });
            });
            $('#deleteItemModal').on('submit', function (event) {
                event.preventDefault();
                var formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('id', $('#delete_item_id').val());
                $.ajax({
                    url: "https://SmmPortal.com/admin/systemsetting/user/hr/List_Student/delete",
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function (response) {
                        if (response.success) {
                            resetAfterChange(response.TableData);
                            toastr.success(response.success);
                            $('#deleteItemModal').modal('hide');
                        } else {
                            toastr.error(response.error);
                        }
                    },
                });
            });

        });

        function createModalShow() {
            $('#item_add').modal('show');
            $('.modal-title span').text('Add New');
            resetForm();
        }

        function showValidationErrors(formType, errors) {
            $(formType + ' #name_error').text(errors.name);
        }

        function showDeleteModal(imteId) {
            $('#delete_item_id').val(imteId);
            $('#deleteItemModal').modal('show');
        }

        function editItem(item) {
            $('#item_add').modal('show');
            $('.modal-title span').text('Edit');
            $('#item_id').val(item.id);
            $("#name").val(item.name);
            $("#details").val(item.details);
            if (item.status == 1) {
                $('#status_active').prop("checked", true);
                $('#status_inactive').prop("checked", false);
            } else {
                $('#status_active').prop("checked", false);
                $('#status_inactive').prop("checked", true);
            }
        }

        function resetForm() {
            $('#item_id').val('');

            $('form')[0].reset();
            $('#name_error').text('');
            $('#name').val('');
            $('#user_id').niceSelect('update')
            $('#user_id').val('');
            $('#details').val('');
            $('#status_active').prop("checked", true);
            $('button[type="submit"]').removeAttr('disabled');
            $('button[type="submit"]').find('i').removeClass('fa-spinner fa-spin')
        }

        function resetAfterChange(tableData) {
            $('#item_table').empty().html(tableData);
            datatableReload()
            resetForm();
        }


        function datatableReload() {
            $('.Crm_table_active3').DataTable(dataTableOptions);

            $('.dataTables_length label select').niceSelect();
            $('.dataTables_length label .nice-select').addClass('dataTable_select');
        }
    </script>

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