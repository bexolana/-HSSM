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
                        <h1 class="text-uppercase">Transaction Report</h1>
                        <div class="bc-pages">
                            <a href="/dashboard">Dashboard</a>
                            <a href="/TransactionReport">Transaction Report</a>
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
                                            <h3>Total Transaction</h3>
                                        </div>
                                        <h1 class="gradient-color2">
                                            234
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
                                            <h3>Today Transaction</h3>
                                        </div>
                                        <h1 class="gradient-color2">
                                           56
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
                                            <h3>Weekly Transaction</h3>
                                        </div>
                                        <h1 class="gradient-color2">
                                           56
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
                                        <h3 class="mb-0 mr-30">Transaction Report</h3>
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
                                                        <th scope="col">User</th>
                                                        <th scope="col">Balance</th>
                                                        <th scope="col">History</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>AAAA</td>
                                                        <td>34</td>
                                                        <td>view</td>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>BBBBB</td>
                                                        <td>456</td>
                                                        <td>View</td>
                                                        
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