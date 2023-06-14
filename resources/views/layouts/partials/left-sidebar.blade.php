<div class="left-side-menu">

    <div class="h-100" data-simplebar>

         <!-- User box -->
        <div class="user-box text-center">

            <img src="{{ asset('template') }}/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                <div class="dropdown">
                    <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">Muhammad Izaaz</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user me-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings me-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock me-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out me-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>

            <p class="text-muted left-user-info">Manager</p>
        </div>
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
    
                <li>
                    <a href="index.html">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="/marketing/index">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span> Marketing </span>
                    </a>
                </li>

                <li>
                    <a href="/production/index">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Production </span>
                    </a>
                </li>

                <li>
                    <a href="/finance/index">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Finanace </span>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        @guest
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
    
                <li>
                    <a href="index.html">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="/marketing/index">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span> Marketing </span>
                    </a>
                </li>

                <li>
                    <a href="/production/index">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Production </span>
                    </a>
                </li>

                <li>
                    <a href="/finance/index">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Finanace </span>
                    </a>
                </li>
            </ul>
        </div>
        @endguest

       @auth
            @role('admin')
            <div id="sidebar-menu">

                <ul id="side-menu">
    
                    <li class="menu-title">Navigation</li>
        
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
    
                    <li class="menu-title mt-2">Features</li>
    
                    <li>
                        <a href="{{ route('admin.profile') }}">
                            <i class="mdi mdi-calendar-blank-outline"></i>
                            <span> My Profile </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="{{ route('admin.my-activity') }}">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> User data </span>
                        </a>
                    </li>
                    <li>
                        <a href="apps-calendar.html">
                            <i class="mdi mdi-calendar-blank-outline"></i>
                            <span> Marketing </span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Production </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Finanace </span>
                        </a>
                    </li>
                </ul>
            </div>
            @endrole

            @role('manager')
            <div id="sidebar-menu">

                <ul id="side-menu">
    
                    <li class="menu-title">Navigation</li>
        
                    <li>
                        <a href="{{ route('manager.dashboard') }}">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
    
                    <li class="menu-title mt-2">Features</li>
    
                    <li>
                        <a href="apps-calendar.html">
                            <i class="mdi mdi-calendar-blank-outline"></i>
                            <span> Marketing </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Production </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Finanace </span>
                        </a>
                    </li>
                </ul>
            </div>
            @endrole

            @role('staff')
            <div id="sidebar-menu">

                <ul id="side-menu">
    
                    <li class="menu-title">Navigation</li>
        
                    <li>
                        <a href="{{ route('staff.dashboard') }}">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
    
                    <li class="menu-title mt-2">Features</li>
    
                    <li>
                        <a href="apps-calendar.html">
                            <i class="mdi mdi-calendar-blank-outline"></i>
                            <span> My Profile </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> producution </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Marketing </span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Finance </span>
                        </a>
                    </li>
                </ul>
            </div>
            @endrole
        @endauth

        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>