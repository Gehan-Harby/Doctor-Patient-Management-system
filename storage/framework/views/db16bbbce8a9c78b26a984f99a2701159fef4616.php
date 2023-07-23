
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/search_form.css">
    <title>Services Page </title>
</head>

<body id="main">
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">

        <form action="/Services" method="get">
            <?php echo csrf_field(); ?>
            <center>
                <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
                    <b> Services result</b>
                    <img src="/images/service_logo.png" alt="logo" style="width:5%;height:4%;margin-left: auto;">
                </legend>
                <hr color="white">
            </center>

            <p style="font-size:larger">
                 The Process of Storing Services of patient at Database Successed..
            </p>
    
            <p>If you want to Exit from page>> <a href="/home"> Home_Page</a></p>

    </div>
    <br> <br>
    </form>


    </div>
</body>

</html><?php /**PATH C:\Users\20128\Downloads\my_website\resources\views//servicesresult.blade.php ENDPATH**/ ?>