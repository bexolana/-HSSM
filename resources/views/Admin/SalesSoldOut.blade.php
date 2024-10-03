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
                        <h1 class="text-uppercase">Sold Out</h1>
                        <div class="bc-pages">
                            <a href="/dashboard">Dashboard</a>
                            <a href="/sales">Socail Media Sold Out</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="admin-visitor-area up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="white-box">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-flex flex-wrap mb-0">
                                        <h3 class="mb-0">Sold Out List</h3>
                                    </div>
                                </div>
                                <div class="  QA_section QA_section_heading_custom check_box_table">
                                    <div class="QA_table ">
                                        <!-- table-responsive -->
                                        <div class="">
                                            <table id="lms_table" class="table table-data">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">SL</th>
                                                        <th scope="col">User</th>
                                                        <th scope="col">SM Catagory</th>
                                                        <th scope="col">SM Name</th>
                                                        <th scope="col">Thumbnail Image</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">SM Link</th>
                                                        <th scope="col">Followers</th>
                                                        <th scope="col">Phone Number</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>User name</td>
                                                        <td>Youtube</td>
                                                        <td>feta daily</td>
                                                        <td><img src="demo/category/thumb/5.png" alt=""class="img img-responsive m-2" style="width: 70px !important; "></td>
                                                        <td>1000</td>
                                                        <td>Link Here</td>
                                                        <td>1000</td>
                                                        <td>09232423947</td>
                                                        <td>Master the principles of financial ......</td>
                                                        <td>
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu16" data-bs-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu16">
                                                                <a class="dropdown-item edit_brand" href="#">View</a>
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
            </section>


            
            <script>
                function confirm_modal(delete_url) {
                    jQuery('#confirm-delete').modal('show', { backdrop: 'static' });
                    document.getElementById('delete_link').setAttribute('href', delete_url);
                }
            </script>

            <div class="modal fade admin-query" id="confirm-delete">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Confirmation</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">Are you sure to delete ?</h3>

                            <div class="col-lg-12 text-center">
                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg" data-bs-dismiss="modal">Cancel</button>
                                    <a id="delete_link" class="primary-btn semi_large2 fix-gr-bg">Delete</a>
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

    <script src="backend/js/datatable_extra.js" type="application/javascript"></script>
    <script src="backend/js/plugin.js" type="application/javascript"></script>


    <script src="backend/js/category7b4a.js?v=7.1.0"></script>
    <script src="Modules/AIContent/Resources/assets/js/ai_content.js"></script>
  
    <script>
        $('.dataTables_length label select').niceSelect();
        $('.dataTables_length label .nice-select').addClass('dataTable_select');
        $(document).on('click', '.dataTables_length label .nice-select', function () {
            $(this).toggleClass('open_selectlist');
        })
    </script>


</body>

</html>