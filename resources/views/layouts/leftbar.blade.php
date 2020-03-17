<div class="xp-leftbar">
    <!-- Start XP Sidebar -->
    <div class="xp-sidebar">
        <!-- Start XP Logobar -->
        <div class="xp-logobar text-center">
            <a href="{{url('/')}}" class="xp-logo"><img src="{{ asset('assets/images/logo-check-out.png') }}" width="60%" class="img-fluid" alt="logo"></a>
            {{-- <a href="{{url('/')}}" class="xp-logo"><img src="https://kpopinfo114.files.wordpress.com/2015/08/april-logo-e1439292018843.jpg" width="60%" class="img-fluid" alt="logo"></a> --}}
        </div>
        <!-- End XP Logobar -->
        <!-- Start XP Navigationbar -->
        <div class="xp-navigationbar">
            <ul class="xp-vertical-menu">
                <li>
                    <a href="{{url('/')}}">
                      <i class="icon-speedometer"></i><span>Dashboard</span>
                  </a>
                </li>
                <li>
                    <a href="{{url('/hotels')}}">
                        <i class="fa fa-building"></i><span>Hotels</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <i class="fa fa-cube"></i><span>Inventory</span><i class="icon-arrow-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('inventories.index') }}">Inventory</a></li>
                    </ul>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('sub-inventories.index') }}">Sub Inventory</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/floors')}}">
                      <i class="fa fa-home"></i><span>Floors</span>
                  </a>
                </li>
                <li>
                    <a href="{{url('/users')}}">
                      <i class="fa fa-users"></i><span>Employees</span>
                  </a>
                </li>
                <li>
                    <a href="{{url('/maintenance')}}">
                        <i class="fab fa-searchengin"></i><span>Maintenance</span>
                  </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <i class="fa fa-desktop"></i><span>Control</span><i class="icon-arrow-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('control.rooms_control') }}">Rooms</a></li>
                    </ul>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('control.assign_rooms_control') }}">Assign rooms</a></li>
                    </ul>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('control.rooms_pending_review') }}">Pending Review</a></li>
                    </ul>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('control.tickets_list') }}">Tickets List</a></li>
                    </ul>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('control.schedules') }}">Schedules</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/messages')}}">
                      <i class="fa fa-comments-o"></i><span>Messages</span>
                  </a>
                </li>
                <li>
                    <a href="{{url('/app/login')}}">
                      <i class="fa fa-celphone"></i><span>App</span>
                  </a>
                </li>
            </ul>
        </div>
        <!-- End XP Navigationbar -->
    </div>
    <!-- End XP Sidebar -->
</div>