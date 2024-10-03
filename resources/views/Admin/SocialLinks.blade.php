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
                        <h1 class="text-uppercase">Social Setting</h1>
                        <div class="bc-pages">
                            <a href="/dashboard.html">Dashboard</a>
                            <a href="/SocialLinks">Social Setting</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="admin-visitor-area up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-lg-3">
                            <div class="white-box mb_30 ">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="box_header common_table_header">
                                            <div class="main-title d-md-flex">
                                                <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">
                                                    Add New
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="https://SmmPortal.com/frontend/social-setting" method="POST"id="coupon-form" name="coupon-form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="category" value="1">
                                    <div class="row">


                                        <div class="col-xl-12">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label" for="">Icon <strong
                                                        class="text-danger">*</strong></label>
                                                <select class="primary_select mb-25  " name="icon" id="icon" required>
                                                    <option value="fab fa-facebook"><i class="fa fa-facebook"></i>
                                                        fa-facebook </option>
                                                    <option value="fab fa-twitter"><i class="fa fa-twitter"></i>
                                                        fa-twitter </option>
                                                    <option value="fab fa-linkedin"><i class="fa fa-linkedin"></i>
                                                        fa-linkedin </option>
                                                    <option value="fab fa-instagram"><i class="fa fa-instagram"></i>
                                                        fa-instagram </option>
                                                    <option value="fab fa-google-plus"><i class="fa fa-google-plus"></i>
                                                        fa-google-plus </option>
                                                    <option value="fab fa-youtube"><i class="fa fa-youtube"></i>
                                                        fa-youtube </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-xl-12">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label" for="">Enter social link
                                                    <strong class="text-danger">*</strong></label>
                                                <input name="btn_link" id="btn_link" class="primary_input_field name "
                                                    placeholder="Enter social link" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label" for="">Social Name <strong
                                                        class="text-danger">*</strong></label>
                                                <input name="name" id="btn_link" class="primary_input_field name "
                                                    placeholder="Social Name" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label" for="">Status</label>
                                                <select class="primary_select mb-25  " name="status" id="status"
                                                    required>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 text-center">
                                            <div class="d-flex justify-content-center pt_20">
                                                <button type="submit" class="primary-btn semi_large fix-gr-bg"
                                                    data-bs-toggle="tooltip" title="" id="save_button_parent">
                                                    <i class="ti-check"></i>
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-9">

                            <div class="white-box">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-flex flex-wrap mb-0">
                                        <h3 class="mb-0">Social Setting </h3>
                                    </div>
                                </div>
                                <div class="QA_section QA_section_heading_custom check_box_table">
                                    <div class="QA_table ">
                                        <!-- table-responsive -->
                                        <div class="">
                                            <table id="lms_table" class="table Crm_table_active3">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">SL</th>
                                                        <th scope="col">Icon</th>
                                                        <th scope="col">Link</th>
                                                        <th scope="col">Social Name</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <tr>
                                                        <th>2</th>
                                                        <td><i class="fab fa-facebook-square"></i></td>
                                                        <td>https://facebook.com</td>
                                                        <td>Facebook</td>
                                                        <td>
                                                            <label class="switch_toggle" for="status_enable_disable2">
                                                                <input type="checkbox" id="status_enable_disable2"
                                                                    class=" status_enable_disable " checked value="2">
                                                                <i class="slider round"></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <!-- shortby  -->
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button" id="dropdownMenu2"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenu2">
                                                                    <a href="../login.html"
                                                                        class="dropdown-item edit_brand">Edit</a>
                                                                    <a onclick="confirm_modal('../login.html');"
                                                                        class="dropdown-item edit_brand">Delete</a>
                                                                </div>
                                                            </div>
                                                            <!-- shortby  -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td><i class="fab fa-youtube"></i></td>
                                                        <td>https://youtube.com</td>
                                                        <td>Youtube</td>
                                                        <td>
                                                            <label class="switch_toggle" for="status_enable_disable3">
                                                                <input type="checkbox" id="status_enable_disable3"
                                                                    class=" status_enable_disable " checked value="3">
                                                                <i class="slider round"></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <!-- shortby  -->
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button" id="dropdownMenu2"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenu2">
                                                                    <a href="../login.html"
                                                                        class="dropdown-item edit_brand">Edit</a>
                                                                    <a onclick="confirm_modal('../login.html');"
                                                                        class="dropdown-item edit_brand">Delete</a>
                                                                </div>
                                                            </div>
                                                            <!-- shortby  -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td><i class="fab fa-twitter-square"></i></td>
                                                        <td>https://twitter.com</td>
                                                        <td>Twitter</td>
                                                        <td>
                                                            <label class="switch_toggle" for="status_enable_disable4">
                                                                <input type="checkbox" id="status_enable_disable4"
                                                                    class=" status_enable_disable " checked value="4">
                                                                <i class="slider round"></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <!-- shortby  -->
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button" id="dropdownMenu2"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenu2">
                                                                    <a href="../login.html"
                                                                        class="dropdown-item edit_brand">Edit</a>
                                                                    <a onclick="confirm_modal('../login.html');"
                                                                        class="dropdown-item edit_brand">Delete</a>
                                                                </div>
                                                            </div>
                                                            <!-- shortby  -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <td><i class="fab fa-linkedin"></i></td>
                                                        <td>https://linkedin.com</td>
                                                        <td>Linkedin</td>
                                                        <td>
                                                            <label class="switch_toggle" for="status_enable_disable5">
                                                                <input type="checkbox" id="status_enable_disable5"
                                                                    class=" status_enable_disable " checked value="5">
                                                                <i class="slider round"></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <!-- shortby  -->
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button" id="dropdownMenu2"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdownMenu2">
                                                                    <a href="../login.html"
                                                                        class="dropdown-item edit_brand">Edit</a>
                                                                    <a onclick="confirm_modal('../login.html');"
                                                                        class="dropdown-item edit_brand">Delete</a>
                                                                </div>
                                                            </div>
                                                            <!-- shortby  -->
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
                                    <button type="button" class="primary-btn tr-bg"
                                        data-bs-dismiss="modal">Cancel</button>
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