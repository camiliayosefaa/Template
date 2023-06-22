
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                {{-- <li class="menu-title">
                    <span>Menu</span>
                </li> --}}
                <li class="{{set_active(['home'])}}">
                    <a href="{{ route('home') }}" class="{{ set_active(['home']) }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span>
                    </a>
                    {{-- <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['home'])}}" href="{{ route('home') }}">User Active</a></li>
                        <li><a class="{{set_active(['em/dashboard'])}}" href="{{ route('em/dashboard') }}">List</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a class="{{set_active(['form/holidays/new'])}}" href="{{ route('form/holidays/new') }}">
                        <i class="la la-user"></i> <span>Organization</span>
                    </a>
                </li>

                    <li><a class="{{set_active(['userManagement'])}}" href="{{ route('userManagement') }}">
                            <i class="la la-user-secret"></i>
                            <span> User Management </span>
                        </a>
                        {{-- <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                            <li><a class="{{set_active(['search/user/list','userManagement'])}}" href="{{ route('userManagement') }}">All User</a></li>
                            <li><a class="{{set_active(['activity/log'])}}" href="{{ route('activity/log') }}">Activity Log</a></li>
                            <li><a class="{{set_active(['activity/login/logout'])}}" href="{{ route('activity/login/logout') }}">Activity User</a></li>
                        </ul> --}}
                    </li>

                {{-- <li>
                    <a class="{{set_active(['form/holidays/new'])}}" href="{{ route('form/holidays/new') }}">
                        <i class="la la-user"></i> <span>Organization</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
