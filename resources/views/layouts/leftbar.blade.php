<div class="xp-leftbar">
    <!-- Start XP Sidebar -->
    <div class="xp-sidebar">
        <!-- Start XP Logobar -->
        <div class="xp-logobar text-center">
            <a href="{{url('/')}}" class="xp-logo"><img src="https://kpopinfo114.files.wordpress.com/2015/08/april-logo-e1439292018843.jpg" width="60%" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End XP Logobar -->
        <!-- Start XP Navigationbar -->
        <div class="xp-navigationbar">
            <ul class="xp-vertical-menu">
                <li class="xp-vertical-header">Main</li>
                <li>
                    <a href="{{url('/')}}">
                      <i class="icon-speedometer"></i><span>Dashboard</span>
                  </a>
                </li>
                <li>
                    <a href="{{url('/hotels')}}">
                      <i class="fa fa-building"></i><span>Hoteles</span>
                  </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <i class="icon-drop"></i><span>Inventory</span><i class="icon-arrow-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{ route('inventories.index') }}">Inventory</a></li>
                    </ul>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{url('/ui-kits-alerts')}}">Sub Inventory</a></li>
                    </ul>
                </li>
                <li class="xp-vertical-header">Others</li>
                <li>
                    <a href="javaScript:void();">
                        <i class="icon-book-open"></i><span>Extra Pages</span><i class="icon-arrow-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{url('/page-starter')}}">Starter Page</a></li>
                        <li><a href="{{url('/page-timeline')}}">Timeline</a></li>
                        <li><a href="{{url('/page-pricing')}}">Pricing</a></li>
                        <li><a href="{{url('/page-invoice')}}">Invoice</a></li>
                        <li><a href="{{url('/page-faq')}}">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End XP Navigationbar -->
    </div>
    <!-- End XP Sidebar -->
</div>