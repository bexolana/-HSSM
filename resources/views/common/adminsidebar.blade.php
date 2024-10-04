<nav id="sidebar" class="sidebar  ">

    <div class="sidebar-header update_sidebar">
        <a class="large_logo" href="/index">
            <img src="uploads/settings/logo.png" alt="">
        </a>
        <a class="mini_logo" href="/index">
            <img src="uploads/settings/logo.png" alt="">
        </a>
        <a id="close_sidebar" class="d-lg-none">
            <i class="ti-close"></i>
        </a>
    </div>
    <ul id="sidebar_menu">

        <li class="mm-active">
            <a href="/dashboard" class=" " aria-expanded="false">
                <div class="nav_icon_small">
                    <span class="fas fa-th"></span>
                </div>
                <div class="nav_title">
                    <span>Dashboard</span>
                </div>
            </a>
        </li>


        <span class="menu_seperator">
            Users
        </span>



        <li class="">
            <a href=" # " class="  has-arrow " aria-expanded="false">
                <div class="nav_icon_small">
                    <span class="fas fa-user"></span>
                </div>
                <div class="nav_title">
                    <span>Users Managemnt</span>
                </div>
            </a>
            <ul>

            <li class="">
    <a href="{{ route('users.index') }}">User List</a>
</li>

<li class="">
    <a href="{{ route('roles.index') }}">Roles & Permission</a>
</li> 


            </ul>
        </li>


        <span class="menu_seperator">
            orders
        </span>
        <li class="">
            <a href=" # " class="  has-arrow " aria-expanded="false">
                <div class="nav_icon_small">
                    <span class="fas fa-book"></span>
                </div>
                <div class="nav_title">
                    <span>Orders Management</span>
                </div>
            </a>
            <ul>

                <li class="">
                    <a href="/hssm_orders">New Orders</a>
                </li>
                <li class="">
                    <a href="/OnprogressOrders">Onprogress Orders</a>
                </li>

                <li class="">
                    <a href="/SolvedOrders">Solved Orders</a>
                </li>

            </ul>
        </li>



        <li class="">
            <a href=" # " class="  has-arrow " aria-expanded="false">
                <div class="nav_icon_small">
                    <span class="fas fa-question-circle"></span>
                </div>
                <div class="nav_title">
                    <span>Transaction</span>
                </div>
            </a>
            <ul>

                <li class="">
                    <a href="/NewTransaction">New Transaction</a>
                </li>

                <li class="">
                    <a href="/solvedTransaction">Solved Transaction</a>
                </li>

            </ul>
        </li>


        <li class="">
            <a href="/sm_page">
                <div class="nav_icon_small">
                    <span class="fas fa-th "></span>
                </div>
                <div class="nav_title">
                    <span>Social Media</span>
                </div>
            </a>
        </li>



        <li class="">
            <a href="/Service">
                <div class="nav_icon_small">
                    <span class="fas fa-certificate"></span>
                </div>
                <div class="nav_title">
                    <span>Service</span>
                </div>
            </a>
        </li>


        <li class="">
            <a href=" # " class="  has-arrow " aria-expanded="false">
                <div class="nav_icon_small">
                    <span class="fas fa-chart-area"></span>
                </div>
                <div class="nav_title">
                    <span>Sales</span>
                    <span class="demo_addons">visual Products ADS</span>
                </div>
            </a>
            <ul>

                <li class="">
                    <a href="/get_sm_sell_request">Sales</a>
                </li>

                <li class="">
                    <a href="/SalesSoldOut">Sold Out</a>
                </li>

            </ul>
        </li>



        <li class="">
            <a href="/Payment" class=" ">
                <div class="nav_icon_small">
                    <span class="fas fa-money-bill-alt"></span>
                </div>
                <div class="nav_title">
                    <span>Payments</span>
                </div>
            </a>
        </li>

        <li class="">
            <a href="/SocialLinks" >
                <div class="nav_icon_small">
                    <span class="fas    fa-bullhorn"></span>
                </div>
                <div class="nav_title">
                    <span>Social Media Icon</span>
                </div>
            </a>
            
        </li>

        <li class="">
            <a href=" # " class="  has-arrow " aria-expanded="false">
                <div class="nav_icon_small">
                    <span class="fas fa-chart-area"></span>
                </div>
                <div class="nav_title">
                    <span>Report</span>
                </div>
            </a>
            <ul>
                <li class="">
                    <a href="/TransactionReport">Transaction Report</a>
                </li>

            </ul>
        </li>

    </ul>
</nav>