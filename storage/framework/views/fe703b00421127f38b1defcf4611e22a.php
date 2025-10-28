
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo e(asset('')); ?>">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $__env->yieldContent('title', 'Auth | Metronic'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" />
</head>
<body id="kt_body" class="app-blank">
<div class="d-flex flex-column flex-lg-row flex-root" id="kt_app_root">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script>var hostUrl = "<?php echo e(asset('assets/')); ?>";</script>
    <script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\S.A computer\themetest\resources\views/layout/noAuth.blade.php ENDPATH**/ ?>