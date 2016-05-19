@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>
    </li>
@endif
<li>
  <a>User Management</a>
  <ul class="nav nav-sub" id="collapseAppSubMenu">
    <li class="{{ set_active('admin/users') }}"><a href="{{ url('admin/users')}}">Manage Users</a></li>
    <li class="{{ set_active('admin/roles') }}"><a href="{{ url('admin/roles')}}">Manage Roles</a></li>
    <li class="{{ set_active('admin/permissions') }}"><a href="{{ url('admin/permissions')}}">Manage Permissions</a></li>
  </ul>
</li>
