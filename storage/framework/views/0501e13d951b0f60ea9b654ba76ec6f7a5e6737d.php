<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor_Patient Management System</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- Nav bar -->
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main content -->
    <main>
       <?php echo $__env->yieldContent('main'); ?>
    </main>

    <!-- Footer -->
    <footer>
        Copyright &copy; 2022, Doctor_Patient Management System, All rights reserved.
    </footer>

</body>

</html><?php /**PATH C:\Users\20128\Desktop\my_website\resources\views/main_templet.blade.php ENDPATH**/ ?>