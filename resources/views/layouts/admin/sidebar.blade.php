<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="{{ route('admin.home') }}"><i class="menu-icon icon-dashboard"></i>Dashboard
                        </a></li>
                        <li><a href="{{ route('provider') }}"><i class="menu-icon icon-bullhorn"></i>Service Providers </a>
                        </li>
                        <li><a href="{{ route('service') }}"><i class="menu-icon icon-inbox"></i>Services</a></li>
                    </ul>
                    <!--/.widget-nav-->
                    
                    
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{ route('county') }}"><i class="menu-icon icon-bold"></i> Counties </a></li>
                        <li><a href="{{ route('subcounty') }}"><i class="menu-icon icon-book"></i>Sub counties </a></li>
                        <li><a href="{{ route('ward') }}"><i class="menu-icon icon-paste"></i>Wards </a></li>
                    </ul>
                    <!--/.widget-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>Extra </a>
                            <ul id="togglePages" class="collapse unstyled">
                                <li><a href="other-user-listing.html"><i class="icon-inbox"></i>Users </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="menu-icon icon-signout"></i>Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>
            <!--/.span3-->