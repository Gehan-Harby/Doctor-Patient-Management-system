

<?php $__env->startSection('main'); ?>
<h1>Register</h1>
<form method="post" action="/register">
    <?php echo csrf_field(); ?>
    <div class="form-field">
        <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
        <label for="name">Name:</label>
        <input required type="text" name="name" id="name" value="<?php echo e(old('name')); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-field">
        <label for="email">Email:</label>
        <input required type="email" name="email" id="email" value="<?php echo e(old('email')); ?>">
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
    </div>
    <div class="form-field">
        <label for="password-confirmation">Password Confirmation:</label>
        <input required type="password" name="password_confirmation" id="password-confirmation">
    </div>
    <input class="btn btn-primary btn-big" type="submit" value="Register">
    <p>Already have an account? <a href="/login">Login</a></p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_templet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\20128\Downloads\Final Larvel Project\my_website\resources\views/register.blade.php ENDPATH**/ ?>