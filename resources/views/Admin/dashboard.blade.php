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
                        <h1 class="text-uppercase">Dashboard</h1>
                    </div>
                </div>
            </section>

            <div class="container-fluid p-0">

                <div class="row row-gap-4 justify-content-center mt-0">

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>Users</h3>
                                        <p class="mb-0">Number of Users</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalStudent"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>Balance</h3>
                                        <p class="mb-0">Total Number of Balance</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalInstructor"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>Orders</h3>
                                        <p class="mb-0">Number of Orders</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalCourses"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>Enrolled</h3>
                                        <p class="mb-0">Number of Enrolled</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalEnroll"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>Enrolled Amount</h3>
                                        <p class="mb-0">Total Enrolled Amount</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalSell"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>Revenue</h3>
                                        <p class="mb-0">Total Revenue</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalRevenue"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>Enrolled Today</h3>
                                        <p class="mb-0">Total Enrolled Today</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalToday"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="d-block">
                            <div class="white-box single-summery">
                                <div class="d-flex justify-content-between gap-20">
                                    <div>
                                        <h3>This Month</h3>
                                        <p class="mb-0">Total Enrolled This Month</p>
                                    </div>
                                    <h1 class="gradient-color2" id="totalThisMonth"> ...
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="container-fluid">
                        <div class="row row-gap-4">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="white_box chart_box">
                                    <h4>Monthly Income Stats for 2024</h4>
                                    <div class="">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="myChart" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="white_box chart_box">
                                    <h4>Payment Statistics for July</h4>
                                    <div class="">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="payment_statistics" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="white_box chart_box">
                                    <h4>Status Overview of Topics</h4>
                                    <div class="">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="course_overview" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="white_box chart_box">
                                    <h4>Overview of Topics</h4>
                                    <div class="">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="course_overview2" width="400" height="400"></canvas>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="white_box chart_box">
                                    <div class="main-title d-md-flex justify-content-between">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">
                                            CPD 2024</h3>

                                        <ul class="d-flex float-end">

                                            <li>

                                                <a href="login.html" class="primary-btn small fix-gr-bg">
                                                    <span class="ti-download pe-2"></span>
                                                    Export
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="myChartCPD" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="white_box chart_box">
                                    <div class="white_box_tittle list_header">
                                        <h4>Daily Wise Enroll Status for July</h4>
                                    </div>
                                    <div class="row  justify-content-center">
                                        <div class="col-md-12 3 mb-3 mb-lg-0">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="enroll_overview" width="400" height="400"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row row-gap-4">
                    <div class="col-lg-12">
                        <div class="white_box QA_section mt_30">
                            <div class="white_box_tittle list_header">
                                <h4>Total Service by each Enrolled</h4>
                            </div>
                            <div class="table-responsive QA_table" style="max-height: 400px; overflow:auto">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">Catagory</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Enrolled</th>
                                            <th scope="col">Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">youtube
                                                </a>
                                            </th>
                                            <td>Follow</td>
                                            <td>100</td>
                                            <td>1300</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">face book
                                                </a>
                                            </th>
                                            <td>View</td>
                                            <td>300</td>
                                            <td>1300</td>
                                        </tr>


                                        <tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">youtube
                                                </a>
                                            </th>
                                            <td>Follow</td>
                                            <td>100</td>
                                            <td>1300</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">face book
                                                </a>
                                            </th>
                                            <td>View</td>
                                            <td>300</td>
                                            <td>1300</td>
                                        </tr><tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">youtube
                                                </a>
                                            </th>
                                            <td>Follow</td>
                                            <td>100</td>
                                            <td>1300</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">face book
                                                </a>
                                            </th>
                                            <td>Follow</td>
                                            <td>300</td>
                                            <td>1300</td>
                                        </tr><tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">youtube
                                                </a>
                                            </th>
                                            <td>Follow</td>
                                            <td>100</td>
                                            <td>1300</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">face book
                                                </a>
                                            </th>
                                            <td>View</td>
                                            <td>300</td>
                                            <td>1300</td>
                                        </tr><tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">youtube
                                                </a>
                                            </th>
                                            <td>Follow</td>
                                            <td>100</td>
                                            <td>1300</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a target="_blank" href="dashboard.html" class="question_content">face book
                                                </a>
                                            </th>
                                            <td>Like</td>
                                            <td>300</td>
                                            <td>1300</td>
                                        </tr>

                                    </tbody>
                                </table>
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
 
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="backend/js/datatable_extra.js" type="application/javascript"></script>
    <script src="backend/js/plugin.js" type="application/javascript"></script>



    <script src="backend/vendors/chartlist/Chart.min.js"></script>
    <script src="backend/js/daterangepicker.min.js"></script>

    <script>

        var ctx = document.getElementById('course_overview').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Active', 'Pending'],
                datasets: [{
                    label: 'Status Overview of Topics',
                    data: [52, 0],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'

                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false,
                        }
                    }]
                }
            }
        });
        var ctx = document.getElementById('course_overview2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Courses', 'Quizzes', 'Classes'],
                datasets: [{
                    label: 'Overview of Topics',
                    data: [10, 10, 12],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 159, 64, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });


        var ctx = document.getElementById('payment_statistics').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Completed', 'Pending'],
                datasets: [{
                    label: 'Payment Statistics for July',
                    data: [1, 0],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            format: {
                                numberingSystem: 'thai'
                            }
                        }
                    }]
                }
            }
        });
        var enroll_day = [];
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');
        enroll_day.push('');

        var enroll_count = [];
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        enroll_count.push('');
        var ctx = document.getElementById('enroll_overview').getContext('2d');
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {

                labels: enroll_day,
                datasets: [{
                    label: 'Daily Wise Enroll Status for July',
                    data: enroll_count,
                    backgroundColor: 'rgba(124, 50, 255, 0.5)',
                    borderColor: 'rgba(124, 50, 255, 0.5)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        var month_name = [];
        month_name.push('');
        month_name.push('');
        month_name.push('');
        month_name.push('');
        month_name.push('');
        month_name.push('');
        month_name.push('');
        month_name.push('');
        month_name.push('');
        month_name.push('');

        var monthly_earn = [];
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');
        monthly_earn.push('');


        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {

                labels: month_name,
                datasets: [{
                    label: 'Monthly Income Stats for July 2024',
                    data: monthly_earn,
                    backgroundColor: 'rgba(124, 50, 255, 0.5)',
                    borderColor: 'rgba(124, 50, 255, 0.5)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        var student_name = [];
        var total_course = [];
        student_name.push('Jane Smith');
        total_course.push('0');
        student_name.push('Sophia Williams');
        total_course.push('0');
        student_name.push('Liam Johnson');
        total_course.push('0');
        student_name.push('Olivia Brown');
        total_course.push('0');
        student_name.push('Noah Davis');
        total_course.push('0');
        student_name.push('Emma Wilson');
        total_course.push('0');
        student_name.push('James Martinez');
        total_course.push('0');
        student_name.push('Isabella Garcia');
        total_course.push('0');
        student_name.push('Lucas Thompson');
        total_course.push('0');
        student_name.push('Amelia Lopez');
        total_course.push('0');
        student_name.push('Mason Lee');
        total_course.push('0');
        student_name.push('Mia Anderson');
        total_course.push('0');
        student_name.push('Ethan Harris');
        total_course.push('0');
        student_name.push('Ava Clark');
        total_course.push('0');
        student_name.push('Logan Robinson');
        total_course.push('0');
        student_name.push('Emily Walker');
        total_course.push('0');
        student_name.push('Alexander White');
        total_course.push('0');
        student_name.push('Abigail King');
        total_course.push('0');
        student_name.push('Daniel Scott');
        total_course.push('0');
        student_name.push('Avery Wright');
        total_course.push('0');
        student_name.push('Ella Green');
        total_course.push('0');
        student_name.push('Offline Student');
        total_course.push('0');

        var ctx = document.getElementById('myChartCPD').getContext('2d');
        var myChartCPD = new Chart(ctx, {
            type: 'bar',
            maintainAspectRatio: false,
            responsive: true,
            data: {

                labels: student_name,
                datasets: [{
                    label: 'Student Course Statistic',
                    data: total_course,
                    backgroundColor: 'rgba(124, 50, 255, 0.5)',
                    borderColor: 'rgba(124, 50, 255, 0.5)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>


</body>

</html>