

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-10">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="fw-bold mb-5">Welcome, <?php echo e(Auth::user()->name); ?></h3>
            <p class="text-gray-700">
                This is your dashboard.
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\S.A computer\themetest\resources\views/dashboard.blade.php ENDPATH**/ ?>