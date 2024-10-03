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
                        <h1 class="text-uppercase">Profile Update</h1>
                        <div class="bc-pages">
                            <a href="/dashboard">Dashboard</a>
                            <a href="#">User manager</a>
                            <a href="List_Managers.html">List Managers</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="admin-visitor-area up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="white-box">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-md-flex">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">Profile Update</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs ms-0 mb-3 border-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            href="#basic_information_tab">Information about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#change_password_tab">Change
                                            Password</a>
                                    </li>
                                </ul>
                                <div class="white-box">
                                    <div class="tab-content mt-20">
                                        <div class="tab-pane active" id="basic_information_tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3>Information about</h3>
                                                    <hr>
                                                    <form action="https://SmmPortal.com/users/basic-info/update"
                                                        method="POST" enctype="multipart/form-data">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label" for="name">Name
                                                                        <strong class="text-danger">*</strong></label>
                                                                    <input class="primary_input_field" name="name"
                                                                        id="name" type="text" value="Super Admin"
                                                                        placeholder="Full Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label" for="email">Email
                                                                        <strong class="text-danger">*</strong></label>
                                                                    <input class="primary_input_field" name="email"
                                                                        value="@Gmail.com" id="email"
                                                                        placeholder="Email" type="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label" for="phone">Phone
                                                                        Number
                                                                        <small></small></label>
                                                                    <input class="primary_input_field" name="phone"
                                                                        value="" id="phone" placeholder="Phone Number"
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="primary_input single-uploader">
                                                                    <label class="primary_input_label" for="">PROFILE
                                                                        IMAGE
                                                                    </label>
                                                                    <div class="primary_file_uploader"
                                                                        data-bs-toggle="infixUploader"
                                                                        data-multiple="false" data-type="image"
                                                                        data-name="profile_picture">
                                                                        <input class="primary-input file_amount"
                                                                            type="text" id="file_profile_picture"
                                                                            placeholder="choose" readonly="">
                                                                        <button class="" type="button">
                                                                            <label class="primary-btn small fix-gr-bg"
                                                                                for="file_profile_picture">choose
                                                                            </label>
                                                                            <input type="hidden" class="selected_files"
                                                                                value="0">
                                                                        </button>
                                                                    </div>
                                                                    <div class="product_image_all_div">
                                                                    </div>
                                                                    <p class="image_size"> Recommended size (330x400)
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 text-end">
                                                                <hr class="d-block">
                                                                <button class="primary-btn fix-gr-bg" type="submit"><i
                                                                        class="ti-check"></i> Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- change password tab -->
                                        <div class="tab-pane fade" id="change_password_tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3>Change Password</h3>
                                                    <hr>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                        for="password-field">
                                                                        Current Password
                                                                        <strong class="text-danger">*</strong></label>
                                                                    <div>
                                                                        <input class="primary_input_field"
                                                                            name="current_password"
                                                                            placeholder="Current Password "
                                                                            id="password-field" type="password">
                                                                        <span toggle="#password-field"
                                                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                        for="password-field2">
                                                                        New Password
                                                                        <strong class="text-danger">*</strong>
                                                                        <small>( Minimum of 8 characters)</small>
                                                                    </label>
                                                                    <input class="primary_input_field"
                                                                        name="new_password" placeholder="New Password "
                                                                        id="password-field2" type="password">
                                                                    <span toggle="#password-field2"
                                                                        class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                        for="password-field3">Password again
                                                                        <strong class="text-danger">*</strong></label>
                                                                    <input class="primary_input_field"
                                                                        name="confirm_password" id="password-field3"
                                                                        placeholder="Password again" type="password">
                                                                    <span toggle="#password-field3"
                                                                        class="fa fa-fw fa-eye field-icon toggle-password3"></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12 text-end">
                                                                <hr class="d-block">
                                                                <button class="primary-btn fix-gr-bg" type="submit"><i
                                                                        class="ti-check"></i> Save</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            </section>
        </div>
    </div>
</body>

<script src="backend/js/datatable_extra.js" type="application/javascript"></script>
<script src="backend/js/plugin.js" type="application/javascript"></script>

</body>

</html>