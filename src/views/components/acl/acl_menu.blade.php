<li class="treeview {{ isActive( ['roles-assignment.index', 'roles.index', 'permissions.index'], 'is-expanded' ) }}">
    <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-users"></i>
        <span class="app-menu__label">کاربران و دسترسی‌ها</span>
        <i class="treeview-indicator fa fa-angle-left"></i>
    </a>
    <ul class="treeview-menu">
        <li><a class="treeview-item pl-3 {{ isActive('roles-assignment.index') }}" href="{{ route('roles-assignment.index') }}"><i class="icon fa fa-circle-o"></i>کاربران</a></li>
        <li><a class="treeview-item pl-3 {{ isActive('roles.index') }}" href="{{ route('roles.index') }}"><i class="icon fa fa-circle-o"></i>نقش‌ها</a></li>
        <li><a class="treeview-item pl-3 {{ isActive('permissions.index') }}" href="{{ route('permissions.index') }}"><i class="icon fa fa-circle-o"></i>‌دسترسی‌ها</a></li>
    </ul>
</li>
