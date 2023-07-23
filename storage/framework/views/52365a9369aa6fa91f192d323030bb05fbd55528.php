<!DOCTYPE html>
<html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Adding Patient Form </title>
      <link rel="stylesheet" href="/css/new_patient.css">

 </head>
 <body id="main1">
  <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
     <div class="container">
      <form action="post" method="/new_patient">
      <?php echo csrf_field(); ?>
            <center>
            <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
            <b>Add New Patient</b>
            <img src="/images/adding_patient.png" alt="logo" style="width:5%;height:4%;margin-left: auto;">
             </legend>
            <hr color="white">
            </center>
			<h3><u>Personal Data</u></h3>
        <div class="row">
          <div class="col-25">
          <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
            <label for="fname">First Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" required placeholder=" first name of patient..">
            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" required placeholder=" last name of patient..">
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-25">
              <label for="mrn">MRN:</label>
            </div>
            <div class="col-75">
              <input type="text" id="mrn" name="mrn"  required placeholder="patient Medical Record Number..">
            </div>
          </div>
<br>
	<div class="row">
          <div class="col-25">
            <label for="pnumber">Phone Number:</label>
          </div>
          <div class="col-75">
            <input type="text" id="pnumber" name="num" required placeholder="Patient Phone Number..">
          </div>
        </div>
        <br>
		<div class="row">
          <div class="col-25">
            <label for="email">E-mail:</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" name="email" required placeholder=" email of patient..">
          </div>
        </div>
        <br>
			        <div class="row">
          <div class="col-25">
            <label for="date">Date of Birth:</label>
          </div>
          <div class="col-75">
            <input type="date" id="date" name="date" required>
          </div>
        </div>
        <br>
			        <div class="row">
			          
<div class="col-35">
        <label for="gender">Gender:</label required>
          </div>
          <div class="col-65">
<input type="radio" id="gender" name="gender" value="male">Male</div>
		<div class="col-55"><input type="radio" id="gender1" name="gender" value="female" >Female</div>		
          
        </div>
        <br>
			<h3><u>Medical Info</u></h3>
			<div class="row">
          <div class="col-35">
            <label for="cdisease">Chronic Disease:</label>
          </div>
          <div class="col-75">
           <select id="country" name="disease" required>
			  <option value="blood pressure">Blood Pressure</option>
			   <option value="have no chronic disease">Have no Chornic Disease</option>
			   <option value="diabetes">Diabetes</option>
			  </select>
          </div>
        </div>
        <br>
			<div class="row">
          <div class="col-35">
            <label for="dspeciality">Doctor's Speciality:</label>
          </div>
          <div class="col-75">
           <select id="dspeciality" name="dspeciality" required>
			  <option value="Allergy and Immunology">Allergy and Immunology</option>
			   <option value="Anesthesiology">Anesthesiology</option>
			   <option value="Diagnostic radiology">Diagnostic radiology</option>
			    <option value="Dermatology">Dermatology</option>
			    <option value="Emergency medicine">Emergency medicine</option>
			    <option value="Family medicine">Family medicine</option>
			    <option value="Internal medicine">Internal medicine</option>
			    <option value="Medical genetics">Medical genetics</option>
			  </select>
          </div>
        </div>
        <br>
          <br><br>
          <div class="row">
        <button type="submit" name="save"  formaction="">Save </button>
        <button type="submit" name="reservarion number"  formaction="">Reservation Number </button>
        <button type="reset" name="reset">Reset </button>
         <p>If you want to Exit from page>> <a href="/home"> Home_Page</a></p>
        </div>
        <br> <br>
    </form>
    </div>

    </body>
 </html><?php /**PATH C:\Users\SaLmA\Downloads\my_website\resources\views/new_patient.blade.php ENDPATH**/ ?>