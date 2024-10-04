@include('common.adminhead')

<body class="admin">
<input type="hidden" name="url" id="url" value="https://SmmPortal.com">
<input type="hidden" name="csrf_token" class="csrf_token" value="{{ csrf_token() }}">
    <div class="main-wrapper" style="min-height: 600px">
        <!-- Sidebar  -->
        <!-- sidebar part here -->
        @include('common.adminsidebar')



        <!-- Page Content  -->
        <div id="main-content" class="">


       


            <section class="sms-breadcrumb mb-10 white-box">
                <div class="container-fluid p-0">
                    <div class="d-flex flex-wrap justify-content-between">
                        <h1 class="text-uppercase">Service</h1>
                        <div class="bc-pages">
                            <a href="dashboard.html">Dashboard</a>
                            <a href="categories.html">Service List</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="admin-visitor-area up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="white-box mb_30  student-details header-menu">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-flex mb-0">
                                        <h3 class="mb-0"> Add New Service
                                        </h3>
                                    </div>
                                </div>

                                <div class="row pt-0">
                               
                                </div>


                                <form action="https://SmmPortal.com/course/categories/store" method="POST"
                                    id="category-form" name="category-form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="tab-content">

                                    <div class="row">
                                    <div class="col-xl-12">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label" for="catagory">Catagory<strong class="text-danger">*</strong></label>
                                                <select class="primary_select mb-25" name="catagory" id="catagory">
                                                    <option value="">None</option>
                                                    <option value="">None</option>
                                                    <option value="">None</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Service Name
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput"
                                                            class="primary_input_field name " placeholder="Name" type="text" value="">

                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Mimumam Quantity
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput" class="primary_input_field name " placeholder="Number" type="text" value="">

                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Maximum Quantity
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput" class="primary_input_field name " placeholder="Number" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Start Time
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput"
                                                            class="primary_input_field name " placeholder="Hour"
                                                            type="text" value="">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                            for="descriptionInput">Description </label>
                                                        <input name="description" id="descriptionInput"
                                                            class="primary_input_field description "
                                                            placeholder="Description" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Service Charge
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput"
                                                            class="primary_input_field name " placeholder="Birr"
                                                            type="text" value="">

                                                    </div>
                                                </div>

                                            <div class="col-lg-12 text-center">
                                            <div class="d-flex justify-content-center pt_20">
                                                <button type="submit" class="primary-btn semi_large fix-gr-bg"
                                                    data-bs-toggle="tooltip" title="" id="save_button_parent">
                                                    <i class=" fa fa-check "></i>
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                        </div>

                        
                        <div class="col-xl-9">
                            <div class="white-box">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-flex flex-wrap mb-0">
                                        <h3 class="mb-0">Service List</h3>
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
                                                        <th scope="col">Catagory</th>
                                                        <th scope="col">Service Name</th>
                                                        <th scope="col">min | max amount</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td> -&gt; Youtube</td>
                                                        <td>SUBSCRIBE</td>
                                                        <td>1000 | 2000</td>
                                                        <td>
                                                            <label class="switch_toggle" for="checkbox1">
                                                            <input type="checkbox" id="checkbox1" class="status_change" checked value="1" data-value="1">
                                                            <div class="slider round"></div>
                                                                                </label>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu16" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Select
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu16">
                                                                    <a class="dropdown-item edit_brand" href="#">View</a>
                                                                    <a onclick="edit_modal('#');" class="dropdown-item edit_brand" >Edit</a>
                                                                    <a onclick="confirm_modal('#');" class="dropdown-item edit_brand">Delete</a>
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


            <input type="hidden" name="status_route" class="status_route" value="categories/status-update">
            <script>
                function confirm_modal(delete_url) {
                    jQuery('#confirm-delete').modal('show', { backdrop: 'static' });
                    document.getElementById('delete_link').setAttribute('href', delete_url);
                }
                function edit_modal(delete_url) {
                    jQuery('#confirm-edit').modal('show', { backdrop: 'static' });
                    document.getElementById('edit_link').setAttribute('href', edit_url);
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

            <div class="modal fade admin-query" id="confirm-edit">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <div class="modal-body">
                                <form action="https://SmmPortal.com/course/categories/store" method="POST" id="category-form" name="category-form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="tab-content">
                                    <div class="row">
                                    <div class="col-xl-12">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label" for="catagory">Catagory<strong class="text-danger">*</strong></label>
                                                <select class="primary_select mb-25" name="catagory" id="catagory">
                                                    <option value="">None</option>
                                                    <option value="">None</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Service Name
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput"
                                                            class="primary_input_field name " placeholder="Name" type="text" value="">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Mimumam Quantity
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput" class="primary_input_field name " placeholder="Number" type="text" value="">

                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Maximum Quantity
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput" class="primary_input_field name " placeholder="Number" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Start Time
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput" class="primary_input_field name " placeholder="Hour" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                            for="descriptionInput">Description </label>
                                                        <input name="description" id="descriptionInput"
                                                            class="primary_input_field description "
                                                            placeholder="Description" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label" for="nameInput">Service Charge
                                                            <strong class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput" class="primary_input_field name " placeholder="Birr" type="text" value="">
                                                    </div>
                                                </div>
                                    </div>
                                </form>
                            <div class="col-lg-12 text-center">
                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg"
                                        data-bs-dismiss="modal">Cancel</button>
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