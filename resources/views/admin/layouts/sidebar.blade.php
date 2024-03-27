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
            <a href="{{URL::to('admin/dashboard')}}" class="menu-link">
                <i class="mdi mdi-home menu-icon"></i>
                <div>Dashboard</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="{{URL::to('admin/user/list')}}" class="menu-link">
                <i class="fa-solid fa-users  menu-icon"></i>
                <div>User Management</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="fa-solid fa-users  menu-icon"></i>
                <div>Vendors Management</div>
            </a>


        </li>
       

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="fa-solid fa-location-dot menu-icon"></i>
                <div>Location</div>
            </a>
            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="{{URL::to('admin/location/category/list')}}" class="menu-link">
                        
                        <div>Location Category</div>
                    </a>


                </li>
                <li class="menu-item ">
                    <a href="{{URL::to('admin/location/list')}}" class="menu-link">
                        <div>Location</div>
                    </a>


                </li>
                
            </ul>
        </li>

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="fa-solid fa-hotel menu-icon"></i>
                <div>Hotels</div>
            </a>


            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="{{URL::to('admin/hotel/list')}}" class="menu-link">
                       
                        <div>All Hotels</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{URL::to('admin/hotel/add_hotel')}}" class="menu-link">
                        <div>Add New Hotel </div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{URL::to('admin/hotel/proprity_type')}}" class="menu-link">
                        <div>Property Type</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{URL::to('admin/hotel/facility')}}" class="menu-link">
                        <div>Facility</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{URL::to('admin/hotel/hotel_service')}}" class="menu-link">
                        <div>Hotel Service</div>
                    </a>
                </li>



            </ul>
        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="fa-solid fa-indian-rupee-sign menu-icon"></i>
                <div>Payouts</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="fa-solid fa-flag menu-icon"></i>
                <div>Reports</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="fa-solid fa-gear menu-icon"></i>
                <div>Settings</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link">
                        <div>Role management </div>
                    </a>


                </li>
                <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link">
                        <div>Profile</div>
                    </a>


                </li>
               



            </ul>
        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="fa-solid fa-face-smile menu-icon"></i>
                <div>Experience</div>
            </a>


        </li>
        <li class="menu-item ">
            <a href="icons/icons-mdi.html" class="menu-link">
                <i class="fa-solid fa-percent menu-icon"></i>
                <div>Discount</div>
            </a>


        </li>




    </ul>

</aside>
