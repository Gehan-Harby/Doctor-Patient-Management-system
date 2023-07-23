
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
    @include('navbar')
    <div class="container">


        <form action="/search" method="post">
            @csrf
            <center>
                <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
                    <b>Patient Search Form</b>
                    <img src="/images/search_patient.png" alt="logo" style="width:5%;height:4%;margin-left: auto;">
                </legend>
                <hr color="white">
            </center>

            @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="search" name="fname"  required placeholder=" first name of patient begin with capital letter..">
                </div>
            </div>
            @error('name') <p class="error">{{ $message }}</p> @enderror
             <br><br>
            @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="search" name="lname"  required placeholder=" last name of patient begin with capital letter..">
                </div>
            </div>
            @error('name') <p class="error">{{ $message }}</p> @enderror
            <br><br>

            @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
            <div class="row">
                <div class="col-25">
                    <label for="mrn">MRN:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="search" name="mrn"  placeholder=" MRN if You remember it..optional input..">
                </div>
            </div>
            @error('name') <p class="error">{{ $message }}</p> @enderror
            
            <br><br>
            <button class="fa fa-search" type="submit" name="search"> Search </button>

            <button type="reset" name="reset">Reset </button>
            <p>If you want to Exit from page>> <a href="/home"> Home_Page</a></p>

    </div>
    <br> <br>
    </form>

    </div>
</body>

</html>