<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar sidebar_user_image" width="48" height="auto" src="{{ (auth()->user()->getMedia('profile_image')->count() > 0 ? auth()->user()->getMedia('profile_image')->first()->getUrl() : asset('images/home/profile.png'))  }}" alt="User Image">
        <div>
            <span class="app-sidebar__user-name text-white">{{ auth()->user()->full_name }}</span>
        </div>
    </div>
    <ul class="app-menu">

        <li>
            <a class="app-menu__item {{ isActive('panel') }}" href="{{ route('panel') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">پنل مدیریت</span>
            </a>
        </li>

        <!--
        <x-module-menu type="modules"></x-module-menu>
        -->

        @if(auth()->user()->is_admin && auth()->user()->hasRole(['programmer']))
            <x-acl-menu></x-acl-menu>
        @endif

        @if(auth()->user()->is_admin && auth()->user()->hasRole(['programmer']))
            <x-module-menu type="manager"></x-module-menu>
        @endif

    </ul>
</aside>
