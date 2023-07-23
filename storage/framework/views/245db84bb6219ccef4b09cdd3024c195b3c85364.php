<?php if(session('loggedIn')): ?>
    <!-- Nav bar for logged in user -->
    <nav>
        <ul>
             <li><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('home')]) ?>" href="/home">Home Page</a></li>
             <li><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('Add_Doctor')]) ?>" href="/new_doctor">New Doctor</a></li>
             <li><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('Add_Patient')]) ?>" href="/new_patient">New Patient</a></li>
            <li><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('Services')]) ?>" href="/Services">Services</a></li>
            <li><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('Perscription')]) ?>" href="/Perscription">Perscription</a></li>
            <li><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('search')]) ?>" href="/search">Search Patient</a></li>
            <li class="align-right"><a href="/profile"><?php echo e(session('user')->name); ?></a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </nav>
<?php else: ?> 
    <!-- Nav bar for guest -->
    <nav>
        <ul>
          <li class="align-right"><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('login')]) ?>" href="/login">Login</a></li>
            <li><a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active'=>Request::is('register')]) ?>" href="/register">Register</a></li>
        </ul>
    </nav>
<?php endif; ?><?php /**PATH C:\Users\SaLmA\Downloads\my_website\resources\views/navbar.blade.php ENDPATH**/ ?>