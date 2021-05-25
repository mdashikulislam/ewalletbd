<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar ">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="" title="Sleek Dashboard">
                <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33"
                >
                    <g fill="none" fill-rule="evenodd">
                        <path
                            class="logo-fill-blue"
                            fill="#7DBCFF"
                            d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                        />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name text-truncate">School of Engineers</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li>
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                       aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Skill Development</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse @if($prefix === 'admin/skill-development') show @endif"  id="dashboard"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="@if($currentRouteName === 'admin.skill.index') active @endif">
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Index</span>
                                </a>
                            </li>
                            <li class="@if($currentRouteName === 'admin.skill.create') active @endif">
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Add Skill</span>

                                </a>
                            </li>
                            <li class="@if($currentRouteName === 'admin.skill.trash.index') active @endif">
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Trash</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li>
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard1"
                       aria-expanded="false" aria-controls="dashboard1">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">EXCHANGES</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse @if($prefix === 'admin/skill-development') show @endif"  id="dashboard1"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="@if($currentRouteName === 'admin.skill.index') active @endif">
                                <a class="sidenav-item-link" href="{{route('admin.exchange.show')}}">
                                    <span class="nav-text">All EXCHANGES</span>
                                </a>
                            </li>
                            
                        </div>
                    </ul>
                </li>

                <li>
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard2"
                       aria-expanded="false" aria-controls="dashboard2">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Currency Rate</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse @if($prefix === 'admin/skill-development') show @endif"  id="dashboard2"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="@if($currentRouteName === 'admin.skill.index') active @endif">
                                <a class="sidenav-item-link" href="{{route('currency.exchange.show')}}">
                                    <span class="nav-text">Show Currency Rate</span>
                                </a>
                            </li>
                            
                        </div>
                    </ul>
                </li>

                <li>
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard3"
                       aria-expanded="false" aria-controls="dashboard3">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Reserve Data</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse @if($prefix === 'admin/skill-development') show @endif"  id="dashboard3"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="@if($currentRouteName === 'admin.skill.index') active @endif">
                                <a class="sidenav-item-link" href="{{route('reserve.exchange.show')}}">
                                    <span class="nav-text">Show Reserve Data</span>
                                </a>
                            </li>
                            
                        </div>
                    </ul>
                </li>

                <li>
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard4"
                       aria-expanded="false" aria-controls="dashboard4">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Notice Data</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse @if($prefix === 'admin/skill-development') show @endif"  id="dashboard4"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="@if($currentRouteName === 'admin.skill.index') active @endif">
                                <a class="sidenav-item-link" href="{{route('notice.show')}}">
                                    <span class="nav-text">Show Notice Data</span>
                                </a>
                            </li>
                            
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
