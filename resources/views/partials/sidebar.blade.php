@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{url('/admin/home') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/calendar')}}">
                  <i class="fa fa-calendar"></i>
                  <span class="title">
                    Calendar
                  </span>
                </a>
            </li>
        
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                               Roles 
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                              Users 
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_action_access')
                <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                               User Actions
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('formation_access')
            <li class="{{ $request->segment(2) == 'formations' ? 'active' : '' }}">
                <a href="{{ route('admin.formations.index') }}">
                    <i class="fa fa-address-card"></i>
                    <span class="title">Cources</span>
                </a>
            </li>
            @endcan
            
            @can('categorie_access')
            <li class="{{ $request->segment(2) == 'categories' ? 'active' : '' }}">
                <a href="{{ route('admin.categories.index') }}">
                    <i class="fa fa-folder"></i>
                    <span class="title">Categories</span>
                </a>
            </li>
            @endcan
            
            @can('place_access')
            <li class="{{ $request->segment(2) == 'places' ? 'active' : '' }}">
                <a href="{{ route('admin.places.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Class</span>
                </a>
            </li>
            @endcan
           
            <li >
            <a href="{{route('admin.user.profile')}}">
                    <i class="fa fa-user"></i>
                    <span class="title">My profile</span>
                </a>
            </li>
           
            
            @can('setting_access')
            <li class="{{ $request->segment(2) == 'settings' ? 'active' : '' }}">
                <a href="{{ route('admin.settings.settings') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Settings</span>
                </a>
            </li>
            @endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

