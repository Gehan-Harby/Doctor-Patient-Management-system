<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/css/search_form.css">
    <title>Patient Search Page </title>
    
 </head>
 <body id="main">
 <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
    <div class="container">
        <form action="/search"method="post">
            <center>
            <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
            <b>Patient Search Form</b>
            <img src="/images/search_patient.png" alt="logo" style="width:5%;height:4%;margin-left: auto;">
             </legend>
            <hr color="white">
            </center>
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder=" first name of patient..">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder=" last name of patient..">
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-25">
              <label for="mrn">MRN:</label>
            </div>
            <div class="col-75">
              <input type="text" id="mrn" name="mrn" placeholder="patient Medical Record Number..">
            </div>
          </div>
          <br><br>
          <div class="row">
          <button type="submit" name="search"  formaction="">Search </button>
        <button type="reset" name="reset" >Reset </button>
        <p>If you want to Exit from page>> <a href="/home"> Home_Page</a></p>
        
        </div>
        <br> <br>
    </form>
    </div>
    </body>
 </html><?php /**PATH C:\Users\20128\Desktop\my_website\resources\views/search.blade.php ENDPATH**/ ?>