<!-- <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" 
     data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" 
     data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start">

    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="<?php echo e(url('/')); ?>">
            <img alt="Logo" src="<?php echo e(asset('assets/media/logos/demo8.svg')); ?>" class="h-25px app-sidebar-logo-default" />
        </a>
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon btn-active-color-primary">
            <i class="ki-duotone ki-double-left fs-2 rotate-180"></i>
        </div>
    </div>

    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div class="scroll-y my-5 mx-3" data-kt-scroll="true">
            <div class="menu menu-column menu-rounded fw-semibold fs-6">
                <div class="menu-item">
                    <a class="menu-link active" href="<?php echo e(url('/dashboard')); ?>">
                        <span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"></i></span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="#">
                        <span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"></i></span>
                        <span class="menu-title">Users</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="<?php echo e(route('register.show')); ?>">
                        <span class="menu-icon"><i class="ki-duotone ki-user-add fs-2"></i></span>
                        <span class="menu-title">Register</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<aside class="app-sidebar flex-column" id="kt_app_sidebar">
    <div class="app-sidebar-logo p-3">
        <a href="<?php echo e(route('dashboard')); ?>">
            <img alt="Logo" src="<?php echo e(asset('assets/media/logos/default-dark.svg')); ?>" class="h-40px" />
        </a>
    </div>

    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="kt_app_sidebar_menu">
            <div class="menu-item">
                <a class="menu-link active" href="<?php echo e(route('dashboard')); ?>">
                    <span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-icon"><i class="ki-duotone ki-user fs-2"></i></span>
                    <span class="menu-title">Account</span>
                </a>
            </div>
        </div>
    </div>
</aside>
<?php /**PATH C:\Users\S.A computer\themetest\resources\views/layout/partials/sidebar.blade.php ENDPATH**/ ?>