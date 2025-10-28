

<?php $__env->startSection('page_title', 'Dashboard'); ?>
<?php $__env->startSection('breadcrumb', 'Overview'); ?>

<?php $__env->startSection('content'); ?>
<div class="row g-5 mb-5">
    <div class="col-md-6 col-xxl-3">
        <div class="card card-dashed h-100 p-6 d-flex justify-content-between flex-row">
            <div>
                <div class="fs-4 fw-bold mb-2">Total Revenue <span class="text-gray-400 fs-6 ms-2">+38%</span></div>
                <div class="fs-2x fw-bolder">$8,420</div>
            </div>
            <div id="chart1" class="w-75px h-75px"></div>
        </div>
    </div>

    <div class="col-md-6 col-xxl-3">
        <div class="card card-dashed h-100 p-6 d-flex justify-content-between flex-row">
            <div>
                <div class="fs-4 fw-bold mb-2">New Orders <span class="text-gray-400 fs-6 ms-2">+22%</span></div>
                <div class="fs-2x fw-bolder">1,045</div>
            </div>
            <div id="chart2" class="w-75px h-75px"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => console.log('Dashboard ready'));
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\S.A computer\themetest\resources\views/dashboard.blade.php ENDPATH**/ ?>