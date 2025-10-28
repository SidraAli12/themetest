<!-- <div id="kt_app_header" class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="<?php echo e(url('/')); ?>">
                <img alt="Logo" src="<?php echo e(asset('assets/media/logos/default-small.svg')); ?>" class="h-30px" />
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-header-menu align-items-stretch">
                <ul class="menu menu-rounded fw-semibold fs-6">
                    <li class="menu-item"><a href="<?php echo e(url('/dashboard')); ?>" class="menu-link">Dashboard</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Pages</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Apps</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Layouts</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Help</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<header id="kt_app_header" class="app-header d-flex align-items-stretch">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">

        <!--begin::Header logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-5">
            <a href="<?php echo e(url('/dashboard')); ?>">
                <img alt="Logo" src="<?php echo e(asset('assets/media/logos/default-dark.svg')); ?>" class="h-30px" />
            </a>
        </div>
        <!--end::Header logo-->

        <!--begin::Header menu (Top bar)-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu">
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu">
                    <div class="menu-item me-lg-1">
                        <a class="menu-link active" href="<?php echo e(route('dashboard')); ?>">
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </div>
                </div>
            </div>

            <!--begin::User menu-->
            <div class="app-navbar-item ms-1 ms-md-4">
                <div class="btn btn-light-primary fw-bold px-4">
                    <?php echo e(Auth::user()->name ?? 'User'); ?>

                </div>
            </div>
            <!--end::User menu-->
        </div>
        <!--end::Header menu-->

    </div>
    <!--end::Header container-->
</header>
<?php /**PATH C:\Users\S.A computer\themetest\resources\views/layout/partials/header.blade.php ENDPATH**/ ?>