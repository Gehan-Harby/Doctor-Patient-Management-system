

<?php $__env->startSection('main'); ?>
<h1>Login</h1>
<form method="post" action="/login">
    <?php echo csrf_field(); ?>
    <div class="form-field">
        <label for="email">Email:</label>
        <input required  type="email" name="email" id="email" value="<?php echo e(old('email')); ?>">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-field">
        <label for="password">Password:</label>
        <input required type="password" name="password" id="password">
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
    </div>
    <input class="btn btn-primary btn-big" type="submit" value="Login">
    <p>Don't have an account? <a href="/register">Register</a></p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_templet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SaLmA\Downloads\my_website\resources\views/login.blade.php ENDPATH**/ ?>