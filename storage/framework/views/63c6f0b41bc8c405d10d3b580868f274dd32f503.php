<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Prescription Page</title>
      <link rel="stylesheet" href="/css/prescription.css">
   
 </head>
 <body id="main">
 <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <div class="container">
        <form action="/Perscription" method="post">
        <?php echo csrf_field(); ?>
            <center>
            <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
            <b>Prescription</b>
            <img src="/images/percription logo.png" alt="logo" style="width:10%;height:5%;margin-left: auto;">
             </legend>
            <hr color="white">
            </center>
            
			      <br>
        <div class="row">
          <div class="col-25">
            <label for="fname">Doctor Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="dname" required placeholder=" first name of doctor..">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="lname">Patient Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="pname" required placeholder=" name of patient..">
          </div>
        </div>
        
        <br>
		<div class="row">
          <div class="col-25">
            <label for="email">Diagnosis And Treatement:</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" name="dia" required placeholder=" Enter Diagnosis And Treatement..">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="pnumber">Price:</label>
          </div>
          <div class="col-75">
            <input type="text" id="pnumber" name="num" placeholder="Enter Price.." required>
          </div>
        </div>
        <br><br>
			        <div class="row">
          <div class="col-25">
            <label for="date">Visit Date:</label>
          </div>
          <div class="col-75">
            <input type="date" id="date" name="date" required >
          </div>
        </div>
       
			        <div class="row">
			          
        
          <br><br>


      <div class="row">
        <button type="submit" name="save"  formaction="">Save </button>
		    <button type="reset" name="reset"  formaction="">Reset </button>	
        <p>If you want to Exit from page>> <a href="/home"> Home_Page</a></p>  
      </div>

        <br> <br>

    </form>

    </div>
    </body>
 </html><?php /**PATH C:\Users\20128\Downloads\Final Larvel Project\my_website\resources\views/Perscription.blade.php ENDPATH**/ ?>