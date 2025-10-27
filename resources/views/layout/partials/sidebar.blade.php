

<aside class="app-sidebar flex-column" id="kt_app_sidebar">
    <div class="app-sidebar-logo p-3">
        <a href="{{ url('/') }}">
            <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="h-40px" />
        </a>
    </div>

    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="kt_app_sidebar_menu">
            <div class="menu-item">
                <a class="menu-link" href="{{ route('dashboard') }}">
                    <span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>


            
        </div>
    </div>
</aside>
