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
                        <h1 class="text-uppercase">Analytics</h1>
                        <div class="bc-pages">
                            <a href="/dashboard">Dashboard</a>
                            <a href="/Analytics.html">Analytics and log</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-40 up_st_admin_visitor">
                <div class="container-fluid p-0">
                    <div class="row row-gap-4 mb-5">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="#" class="d-block">
                                <div class="white-box single-summery">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3>Total Clicks</h3>
                                            <p class="mb-0 invisible">Clicks</p>
                                        </div>
                                        <h1 class="gradient-color2">
                                            2
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="#" class="d-block">
                                <div class="white-box single-summery">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3>Click From Mobile</h3>
                                            <p class="mb-0 invisible">Clicks</p>
                                        </div>
                                        <h1 class="gradient-color2">
                                            1
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="#" class="d-block">
                                <div class="white-box single-summery">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3>Click From Tablet</h3>
                                            <p class="mb-0 invisible">Clicks</p>
                                        </div>
                                        <h1 class="gradient-color2">
                                            1
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="white-box">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-flex">
                                        <h3 class="mb-0 mr-30">Analytics</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="QA_section QA_section_heading_custom check_box_table">
                                    <div class="QA_table ">
                                        <div class="">
                                            <table id=" " class="table Crm_table_active">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">IP</th>
                                                        <th scope="col">Browser</th>
                                                        <th scope="col">Operating System</th>
                                                        <th scope="col">Messages</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>127.0.0.1</td>
                                                        <td>Telegram</td>
                                                        <td>Iphone</td>
                                                        <td>Test message from Iphone</td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>127.0.0.1</td>
                                                        <td>Telegram</td>
                                                        <td>Android</td>
                                                        <td>Test message from Mobile</td>
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
        $('.dataTables_length label select').niceSelect();
        $('.dataTables_length label .nice-select').addClass('dataTable_select');
        $(document).on('click', '.dataTables_length label .nice-select', function () {
            $(this).toggleClass('open_selectlist');
        })
    </script>

</body>

</html>