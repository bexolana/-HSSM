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
                        <h1 class="text-uppercase">Users</h1>
                        <div class="bc-pages">
                            <a href="/dashboard">Dashboard</a>
                            <a href="/UserList">User List</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="admin-visitor-area up_st_admin_visitor">
               
                <div class="modal fade deleteForm" id="deleteItemModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete User </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    <i class="ti-close "></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <h4>Are you sure to delete ?</h4>
                                </div>
                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <form id="item_delete_form">
                                        <input type="hidden" name="id" id="delete_item_id">
                                        <input id="dataDeleteBtn" type="submit" class="primary-btn fix-gr-bg"
                                            value="Delete" />
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
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">User List</h3>
                                        <ul class="d-flex">
                                            <li>
                                              
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
                                                            <th scope="col">User Name</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Balance</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Created At</th>
                                                            <th scope="col">Action and Balance history</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <!-- <tr>
                                                            <td>1</td>
                                                            <td><div>
                                                                <img style="max-width: 200px" src="demo/brand/1.png" alt="" class="img img-responsive m-2">
                                                            </div>
                                                            </td>
                                                            <td>Abel</td>
                                                            <td>@abel22</td>
                                                            <td>092378622</td>
                                                            <td>0</td>
                                                            <td><div>
                                                                <label class="switch_toggle">
                                                                    <input type="checkbox" class="status_enable_disable" checked value="6">
                                                                    <i class="slider round"></i>
                                                                </label>
                                                            </div>
                                                           </td>
                                                            <td>12/12/17</td>
                                                            <td><div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu16" data-bs-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu16">
                                                                <a onclick="view_modal('#');" class="dropdown-item view_brand">View</a>
                                                                <a onclick="history_modal('#');" class="dropdown-item history_brand">Balance History</a>
                                                            </div>
                                                            </div></td>
                                                            
                                                            
                                                        </tr> -->
                                                        @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <div>
                            <img style="max-width: 200px" src="{{ $user->profile_image }}" alt="" class="img img-responsive m-2">
                        </div>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ '@' . strtolower($user->username) }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->balance }}</td>
                    <td>
                        <div>
                            <label class="switch_toggle">
                                <input type="checkbox" class="status_enable_disable" {{ $user->status ? 'checked' : '' }} value="{{ $user->id }}">
                                <i class="slider round"></i>
                            </label>
                        </div>
                    </td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>
                        <div class="dropdown CRM_dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu16" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select
                            </button>
                       
                        </div>
                    </td>
                </tr>
            @endforeach
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


            
            <script>
                
                function view_modal(delete_url) {
                    jQuery('#confirm-view').modal('show', { backdrop: 'static' });
                    document.getElementById('view_link').setAttribute('href', view_url);
                }
                
                function history_modal(delete_url) {
                    jQuery('#confirm-history').modal('show', { backdrop: 'static' });
                    document.getElementById('history_link').setAttribute('href', history_url);
                }
            </script>
          
          
          <div class="modal fade admin-query" id="confirm-view">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">View</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <div class="modal-body">
                       
                            <div class="col-lg-12 text-center">
                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg" data-bs-dismiss="modal">Cancel</button>
                                    <a id="delete_link" class="primary-btn semi_large2 fix-gr-bg">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade admin-query" id="confirm-history">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Balance History</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">date</th>
                                        <th scope="col">Deposit</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12/12/17</td>
                                        <td>50 ETB</td>
                                        
                                    </tr>
                                </tbody>
                            </table>

                            <div class="col-lg-12 text-center">
                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg" data-bs-dismiss="modal">Cancel</button>
                                    <a id="delete_link" class="primary-btn semi_large2 fix-gr-bg">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



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

    <div class="modal fade admin-query" id="commonModal">

    </div>

    <div id="mediaManagerDiv">
    </div>
    <link rel="stylesheet" href="/Modules/AIContent/Resources/assets/css/ai_content.css">
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