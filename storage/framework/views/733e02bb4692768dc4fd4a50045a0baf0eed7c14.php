

<?php $__env->startSection('main'); ?>
<?php if(session('success_message')): ?>
<p class="success"><?php echo e(session('success_message')); ?></p>
<?php endif; ?>

<img class="imghome" src="/images/homeimg.jpeg" alt="home" >

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_templet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\20128\Downloads\my_website\resources\views/home.blade.php ENDPATH**/ ?>