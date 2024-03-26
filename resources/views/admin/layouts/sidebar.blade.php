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
            <a href="{{URL::To('admin/dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Dashboard</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="{{URL::To('admin/user/list')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>User Management</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Vendors Management</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Location</div>
            </a>


        </li>

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                <div>Hotels</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link" target="_blank">
                        <div>Rooms</div>
                    </a>


                </li>
                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link" target="_blank">
                        <div>Room Categories</div>
                    </a>


                </li>
                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link" target="_blank">
                        <div>Amenities</div>
                    </a>


                </li>



            </ul>
        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Payouts</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Reports</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                <div>Settings</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link" target="_blank">
                        <div>Role management </div>
                    </a>


                </li>
                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link" target="_blank">
                        <div>Profile</div>
                    </a>


                </li>
               



            </ul>
        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Experience</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Discount</div>
            </a>


        </li>




    </ul>

</aside>
