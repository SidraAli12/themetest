<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo e(asset('')); ?>">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $__env->yieldContent('title', 'Dashboard | Metronic'); ?></title>

    <!--begin::Favicon & Fonts-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Favicon & Fonts-->

    <!--begin::Global Stylesheets Bundle-->
    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body id="kt_body" class="app-default">
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::App Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            
            <?php echo $__env->make('layout.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                
                <?php echo $__env->make('layout.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">
                        
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>

                    
                    <?php echo $__env->make('layout.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <!--end::Main-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::App Page-->
    </div>

    <!--begin::Javascript-->
    <script>var hostUrl = "<?php echo e(asset('assets/')); ?>";</script>

    <!--begin::Global Javascript Bundle-->
    <script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Custom JS (optional per page)-->
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <!--end::Custom JS-->
</body>
</html>
<?php /**PATH C:\Users\S.A computer\themetest\resources\views/layout/app.blade.php ENDPATH**/ ?>