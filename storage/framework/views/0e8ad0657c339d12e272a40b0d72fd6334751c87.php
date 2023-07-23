<!Doctype html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Adding Doctor Form</title>
      <link rel="stylesheet" href="/css/new_doctor.css">
        <title>Adding Doctor Form</title>
        
    </head>

    <body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
        <h1 class="doc"><center>  Add New Doctor <img src="/images/adding_doctor.jpg" alt="logo" style="width:3%;height:2%;margin-left: auto;">
        </center></h1>
         <div class="backgroun">
            <form class="main-top" action="/new_doctor" method="post">
                <div class="Name">
                <label>first-name</label>
                <input type="text" required placeholder="first name" name="F_name" autofocus>
                    
                <br/>
                <div>
                <label>last-name</label>
                <input type="text" required placeholder="last name" name="L_name">
                </div>
                </div>
               
                <br>
                <div class="mail">
                <label>E-mail</label>
                <input type="email" required placeholder="write a valid email" name="email">
                </div>
                <br>
                <div class="phone">
                <label>phone-number</label>
                <input type="number" required placeholder="shoud be 12 numbers" name="phone" minlength="12" maxlength="12">
                </div>
                <br>
                <div class="pass">
                <label>Password</label>
                <input type="password" required placeholder=" minmum 8 & maxmum 10" name="pass" minlength="8" maxlength="10">
                </div>
                <br>
                <div class="ssn">
                <label>Doctor-Ssn</label>
                <input type="number" required placeholder="In_id" name="ssn">
                </div>
                <br>
                <div class="spech">
                <label>Specialization</label>
                <input type="text" required name="spech">
                </div>
                <br>
                <div class="birth">
                    <label>Date of Birth</label>
                    <input type="date" />
                </div>
                <br>
                <div class="Gender">gendeer:
                    <input id=" woman" type="radio" name="gen" value="Female" />
                    <label for="woman">Female</label>
                    <input id ="man" type="radio" name="gen" value="Male" />
                    <label for="man">Male</label>
                </div>
                <br>
                <div class="wait-list">
                    <label for="num">Wating patients</label>
                    <input id="num" type="number" name="number" min"0" max="100"/>
                </div>
                <br>
                
                <button type="submit" name="save"  formaction="">Save </button>
                <button type="reset" name="reset"  formaction="">Reset </button>
                 </form>
            </div>
     </body>
</html><?php /**PATH C:\Users\20128\Desktop\my_website\resources\views/new_doctor.blade.php ENDPATH**/ ?>