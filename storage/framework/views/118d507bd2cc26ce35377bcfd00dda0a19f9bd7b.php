

<?php $__env->startSection('main'); ?>

        <form method="POST" action="/Add_patient">
            <center>
            <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
            <b>Add New Patient</b>
            <img src="images/logoofpatient.png" alt="logo" style="width:5%;height:4%;margin-left: auto;">
             </legend>
            <hr color="white">
            </center>
			<h3><u>Personal Data</u></h3>
            <?php echo csrf_field(); ?>
        <div class="form-field">
            <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
            <label for="fname">First Name:</label>
            <input required type="text" name="fname" id="fname" placeholder="Enter Patient First Name" value="<?php echo e(old('fname')); ?>">
            <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="form-field">
            <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
            <label for="lname">Last Name:</label>
            <input required type="text" name="lname" id="lname" placeholder="Enter Patient Last Name" value="<?php echo e(old('lname')); ?>">
            <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-field">
        <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
              <label for="mrn">MRN:</label>
              <input type="text" id="mrn" name="mrn" placeholder="patient Medical Record Number.."value="<?php echo e(old('mrn')); ?>">
              <?php $__errorArgs = ['mrn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-field">
          <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
          <label for="pnumber">Phone Number:</label>
          <input type="text" id="pnumber" name="pnumber" placeholder="Patient Phone Number.."  value="<?php echo e(old('pnumber')); ?>">
          <?php $__errorArgs = ['pnumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-field">
          <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" placeholder=" email of patient.."value="<?php echo e(old('email')); ?>">
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
          <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
            <label for="date">Date of Birth:</label>
            <input type="date" id="date" name="date" value="<?php echo e(old('date')); ?>">
            <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
       
          <div class="form-field">
          <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>    
        <label for="gender">Gender:</label>
            <input type="radio" id="gender" name="gender"  value="<?php echo e(old('gender')); ?>">Male
            <input type="radio" id="gender" name="gender"  value="<?php echo e(old('gender')); ?>">Female		
            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

			<h3><u>Medical Info</u></h3>
			<div class="form-field">
          <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
            <label for="cdisease">Chronic Disease:</label>
           <select id="disease" name="disease"  value="<?php echo e(old('disease')); ?>">
			  <option value="blood pressure">Blood Pressure</option>
			   <option value="have no chronic disease">Have no Chornic Disease</option>
			   <option value="diabetes">Diabetes</option>
			  </select>
        <?php $__errorArgs = ['disease'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

        <div class="form-field">
            <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
              <label for="dspeciality">Doctor's Speciality:</label>
            <select id="dspeciality" name="dspeciality" value="<?php echo e(old('dspeciality')); ?>">
          <option value="Allergy and Immunology">Allergy and Immunology</option>
          <option value="Anesthesiology">Anesthesiology</option>
          <option value="Diagnostic radiology">Diagnostic radiology</option>
            <option value="Dermatology">Dermatology</option>
            <option value="Emergency medicine">Emergency medicine</option>
            <option value="Family medicine">Family medicine</option>
            <option value="Internal medicine">Internal medicine</option>
            <option value="Medical genetics">Medical genetics</option>
          </select>
          <?php $__errorArgs = ['dspeciality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
       
            <button type="submit" name="Add"  formaction="">Add </button>
            <button type="submit" name="reservarion number"  formaction="">Reservation Number </button>
            <button type="reset" name="reset"  formaction="">Reset </button>	  
        
</form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('main_templet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\20128\Desktop\my_website\resources\views/Add_Patient.blade.php ENDPATH**/ ?>