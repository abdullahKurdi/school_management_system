@php
    $current_page = \Route::currentRouteName();
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{__('admin.app_name')}} <sup>1</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @role(['admin','supervisor'])
    @foreach($admin_side_menu as $menu)
        @if(count($menu->appearedChildren) == 0)
            <li class="nav-item {{ $menu->id == getParentShowOf($current_page) ? 'active' : null }}">
                <a class="nav-link" href="{{route('admin.'.$menu->as)}}">
                    <i class="{{$menu->icon !='' ? $menu->icon : 'fas fa-home'}}"></i>
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        <span>{{$menu->display_name_ar}}</span>
                    @else
                        <span>{{$menu->display_name}}</span>
                    @endif
                </a>
            </li>
            <hr class="sidebar-divider">
        @else
        <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{in_array($menu->parent_show, [getParentShowOf($current_page),getChildrenShowOf($current_page)]) ? 'active' : null}}">
                <a class="nav-link {{in_array($menu->parent_show, [getParentShowOf($current_page),getChildrenShowOf($current_page)]) ? 'collapsed' : null}}" href="#"
                   data-toggle="collapse"
                   data-target="#collapse_{{$menu->route}}"
                   aria-expanded="{{$menu->parent_show == getParentShowOf($current_page) && getChildrenShowOf($current_page)  != '' ? 'false' : 'true'}}"
                   aria-controls="collapse_{{$menu->route}}">
                    <i class="{{$menu->icon != '' ? $menu->icon : 'fas fa-home'}}"></i>
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        <span>{{$menu->display_name_ar}}</span>
                    @else
                        <span>{{$menu->display_name}}</span>
                    @endif
                </a>
                @if($menu->appearedChildren() && count($menu->appearedChildren) > 0 !== null)
                    <div id="collapse_{{$menu->route}}"
                         class="collapse {{in_array($menu->parent_show, [getParentShowOf($current_page),getChildrenShowOf($current_page)]) ? 'show' : null}}"
                         aria-labelledby="heading_{{$menu->route}}" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            @foreach($menu->appearedChildren as $sub_menu)
                                <a class="collapse-item {{ getChildrenShowOf($current_page) != null && (int)(getChildrenIdShowOf($current_page)) == $sub_menu->id ? 'active':null}}" href="{{route('admin.'.$sub_menu->as)}}">

                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sub_menu->display_name_ar}}
                                    @else
                                        {{$sub_menu->display_name}}
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </li>
        @endif
    @endforeach
    @endrole





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
