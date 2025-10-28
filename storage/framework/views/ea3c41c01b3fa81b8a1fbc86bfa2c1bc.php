<header class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between">
        <div class="d-flex align-items-center">
            <a href="<?php echo e(route('dashboard')); ?>">
                <img alt="Logo" src="<?php echo e(asset('assets/media/logos/default-small.svg')); ?>" class="h-40px" />
            </a>
        </div>

        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="fw-bold"><?php echo e(Auth::user()->name ?? 'User'); ?></span>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 
                    menu-state-bg-light-primary fw-semibold py-4">
                    <div class="menu-item px-3">
                        <a href="<?php echo e(route('dashboard')); ?>" class="menu-link px-3">My Profile</a>
                    </div>
                    <div class="menu-item px-3">
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="menu-link px-3 btn btn-link text-dark">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\S.A computer\themetest\resources\views/layout/partials/header.blade.php ENDPATH**/ ?>