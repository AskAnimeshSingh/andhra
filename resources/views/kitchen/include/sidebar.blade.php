<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('kitchen.dashboard') }}"> <img alt="image"
                src="{{ url('public/assets/website/indexImages/changed_logo.png')}}"
                class="header-logo" style="background-color: white"/> <span
class="logo-name font-14">Andhra Dining</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('kitchen.dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>


            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('kitchen.order_list') }}">Order History</a></li>
                    <li><a class="nav-link" href="{{ route('kitchen.order_pending_list') }}">New Orders</a></li>
                    <li><a class="nav-link" href="{{ route('kitchen.order_cooking_list') }}">Cooking</a></li>
                    <li><a class="nav-link" href="{{ route('kitchen.completed_order_list') }}">Completed Orders</a></li>
                    <li><a class="nav-link" href="{{ route('kitchen.order_cooked_list') }}">Orders ready to Handover</a></li>
{{--                    <li><a class="nav-link" href="{{ route('kitchen.order_delivered_list') }}">Delivered</a></li>--}}

                </ul>
            </li>

            {{-- <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Chef</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('kitchen.chef')}}">Add Chef</a></li>
                    <li><a class="nav-link" href="{{route('kitchen.list.chef')}}">Chef List</a></li>
                    
                </ul>
            </li> --}}

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>My
                        Account</span></a>
                <ul class="dropdown-menu">
                    <li>
                        {{-- <h6 class="nav-link" style="font-size: 12px; padding-left:29px; text-transform: uppercase;"><i
                                class="fa fa-user"></i>&nbsp;&nbsp;<span style="color: red"> Hello!</span>
                                {{ Auth::guard('admin')->user()->fname }}&nbsp;{{ Auth::guard('admin')->user()->lname }}</h6 class="nav-link"> --}}
                    </li>
                    <li><a class="nav-link" href="{{ route('kitchen.profile')}}">Profile</a></li>
                    <!--<li><a class="nav-link" href="{{ route('kitchen.logout') }}">Log Out</a></li>-->
                    <li>
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          Log Out
                        </a>
                      
                        <form id="logout-form" action="{{ route('kitchen.logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </li>

                </ul>
            </li>


        </ul>
    </aside>
</div>
