<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">

            <span class="app-brand-text demo menu-text fw-semibold ms-2"><img src="{{URL::to('public/assets/admin/img/logo/logo.jpg')}}" alt="" height="50px" width="170px"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">




        <li class="menu-item ">
            <a href="{{URL::to('vendor/dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Dashboard</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>User Management</div>
            </a>


        </li>


        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                <div>Mange Hotels
                </div>
            </a>


            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="{{URL::to('vendor/hotel/list')}}" class="menu-link">
                        <div>Hotel</div>
                    </a>
                    <a href="{{URL::to('vendor/hotel/add_hotel')}}" class="menu-link">
                        <div>Add Hotel</div>
                    </a>


                </li>



            </ul>
        </li>
        <li class="menu-item ">
            <a href="{{URL::To('vendor/booking/history')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Booking History</div>
            </a>
        </li>

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                <div>Reports</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="{{URL::To('vendor/reports/booking-report')}}" class="menu-link" target="_blank">
                        <div> Booking Reports </div>
                    </a>


                </li>
                <li class="menu-item ">
                    <a href="{{URL::to('vendor/reports/enquiry_report')}}" class="menu-link">
                        <div>Enquiry Reports</div>
                    </a>


                </li>
               



            </ul>
        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>payouts</div>
            </a>


        </li>
       

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                <div>Setting</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link">
                        <div>  My Profile </div>
                    </a>


                </li>
                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link">
                        <div>Password change</div>
                    </a>


                </li>
               



            </ul>
        </li>



    </ul>

</aside>
