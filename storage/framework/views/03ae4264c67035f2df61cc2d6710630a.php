

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="w-lg-500px p-10">
                <form class="form w-100" method="POST" action="<?php echo e(route('login.perform')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="text-center mb-11">
                        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                        <div class="text-gray-500 fw-semibold fs-6">Welcome back! Please login to your account.</div>
                    </div>

                    <div class="fv-row mb-8">
                        <input type="email" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required class="form-control bg-transparent" />
                    </div>

                    <div class="fv-row mb-8 position-relative">
                        <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" required />
                    </div>

                    <div class="d-flex flex-stack mb-8">
                        <div class="form-check form-check-solid">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" />
                            <label class="form-check-label fw-semibold text-gray-700 fs-base ms-1" for="remember">
                                Remember me
                            </label>
                        </div>
                        <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
                    </div>

                    <div class="d-grid mb-10">
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Sign In</span>
                        </button>
                    </div>

                    <div class="text-gray-500 text-center fw-semibold fs-6">
                        Don’t have an account?
                        <a href="<?php echo e(url('/register')); ?>" class="link-primary fw-semibold">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
        style="background-image: url('<?php echo e(asset('assets/media/misc/auth-bg.png')); ?>')">
        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100 text-center">
            <a href="<?php echo e(url('/')); ?>" class="mb-12">
                <img alt="Logo" src="<?php echo e(asset('assets/media/logos/custom-1.png')); ?>" class="h-60px h-lg-75px" />
            </a>
            <h1 class="text-white fs-2qx fw-bolder mb-7">Welcome Back!</h1>
            <div class="text-white fs-base opacity-75">
                Log in to continue managing your projects.
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.noAuth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\S.A computer\themetest\resources\views/login.blade.php ENDPATH**/ ?>