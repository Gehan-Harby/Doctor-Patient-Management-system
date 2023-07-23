

<?php $__env->startSection('css'); ?>
<link rel="styleesheet" href="css/style.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<img class="banner" src="/images/welcome.png" alt="Logo">
<h1> Doctor-Patient Management System</h1>
<h2>The way to Management Easily</h2>
<button class="btn btn-big btn-primary" onclick="window.location.href='/register'">Start up!</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_templet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\20128\Downloads\Final Larvel Project\my_website\resources\views/index.blade.php ENDPATH**/ ?>