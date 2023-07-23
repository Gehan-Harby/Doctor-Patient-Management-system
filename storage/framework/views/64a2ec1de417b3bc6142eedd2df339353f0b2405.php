<!DOCTYPE html>
<html lang="en">
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/css/search_form.css">
    <title>Service Page</title>
 </head>
 <body id="main">
 <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <div class="container">
        <form action="/Services" method="post">
            <center>
            <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
            <b>Services</b>
            <img src="/images/service_logo.png" alt="logo" style="width:10%;height:2%;margin-left: auto;">
             </legend>
            <hr color="white">
            </center>
            <div class="row">
              <div class="col-25">
                <label for="servicenum">Service Number:</label>
              </div>
              <div class="col-75">
                <input type="text" id="servicenum" name="servicenum" placeholder=" Enter service number..">
              </div>
            </div>
			      <br>
     
        <div class="row">
          <div class="col-25">
            <label for="lname">Patient Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder=" Enter name of patient..">
          </div>
        </div>
        
        <br>
		
        <div class="row">
          <div class="col-25">
            <label for="pnumber">MRN:</label>
          </div>
          <div class="col-75">
            <input type="text" id="pnumber" name="num" placeholder="Patient Medical Record Number..">
          </div>
        </div>
        <br>
       <strong>Services:</strong>  
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       <select name="service" id="service">
           <center>
         
            <option value="" selected="service 1">service1</option>
            <option value="" selected="service 2">service2</option>
            <option value="" selected="service 3">service3</option>

          </select>
      
        </center>
          <br><br>
          <br><br>


      <div class="row">
      <div class="row">
       <button type="submit" name="save"  formaction="">Save </button>
        <button type="reset" name="reset2" >Reset </button>
        <p>If you want to Exit from page>> <a href="/home"> Home_Page</a></p>
        
        </div>

        <br> <br>

    </form>

    </div>
    </body>
 </html><?php /**PATH C:\Users\20128\Desktop\my_website\resources\views/Services.blade.php ENDPATH**/ ?>