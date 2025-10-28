



<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="app-content flex-column-fluid">
    <div class="app-container container-xxl">

        <!--begin::Welcome card-->
        <div class="card mb-10">
            <div class="card-body py-10">
                <h1 class="fw-bold fs-2x mb-5">Welcome, <?php echo e(Auth::user()->name ?? 'User'); ?> 👋</h1>
                <p class="text-gray-600 fs-5">
                    You are logged into your Metronic-powered dashboard.
                </p>
            </div>
        </div>
        <!--end::Welcome card-->

        <!--begin::Example stats cards-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <div class="col-md-4">
                <div class="card bg-light-primary">
                    <div class="card-body">
                        <h3 class="fw-bold">Total Tasks</h3>
                        <div class="fs-2 fw-bold text-primary">12</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-light-success">
                    <div class="card-body">
                        <h3 class="fw-bold">Completed</h3>
                        <div class="fs-2 fw-bold text-success">8</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-light-danger">
                    <div class="card-body">
                        <h3 class="fw-bold">Pending</h3>
                        <div class="fs-2 fw-bold text-danger">4</div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Example stats cards-->

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\S.A computer\themetest\resources\views/dashboard.blade.php ENDPATH**/ ?>