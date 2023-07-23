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
    @include('navbar')  
        <h1 class="doc">
       <center>  Add New Doctor <img src="/images/adding_doctor.jpg" alt="logo" style="width:3%;height:2%;margin-left: auto;">
        </center></h1>
         <div class="backgroun">
            <form class="main-top" action="/new_doctor" method="post">
            @csrf
                <div class="Name">
                <label>first-name</label>
                <input type="text" required placeholder="first name" name="F_name" autofocus>
               </div>
               <br>
                 <div class="Name">
                <label>last-name</label>
                <input type="text" required placeholder="last name" name="L_name">
                </div>
                
               
                <br>
                <div class="mail">
                <label>E-mail</label>
                <input type="email" required placeholder="write a valid email" name="email">
                </div>
                <br>
                <div class="phone">
                <label>phone-number</label>
                <input type="text" required placeholder="shoud be 11 numbers" name="phone" minlength="11" maxlength="11">
                </div>
                <br>
                <div class="pass">
                <label>Password</label>
                <input type="password" required placeholder=" minmum 8 & maxmum 8" name="pass" minlength="8" maxlength="8">
                </div>
             <br>
                <div class="spech">
                <label>Specialization</label>
                <select id="dspeciality" name="spech" required>
			  <option value="Allergy and Immunology">Allergy and Immunology</option>
			   <option value="Anesthesiology">Anesthesiology</option>
			   <option value="Diagnostic radiology">Diagnostic radiology</option>
			    <option value="Dermatology">Dermatology</option>
			    <option value="Emergency medicine">Emergency medicine</option>
			    <option value="Family medicine">Family medicine</option>
			    <option value="Internal medicine">Internal medicine</option>
			    <option value="Medical genetics">Medical genetics</option>
			  </select></div>
                <br>
                <div class="birth">
                    <label>Date of Birth</label>
                    <input type="date"  name="date"/>
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
                    <input id="num" type="number" name="number" min="0" max="100"/>
                </div>
                <br>
                
                <button type="submit" name="save"  formaction="">Save </button>
                <button type="reset" name="reset"  formaction="">Reset </button>
                 </form>
            </div>
     </body>
</html>