<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/search_form.css">
    <title>Prescription Page </title>
</head>

<body id="main">
    @include('navbar')
    <div class="container">

        <form action="/Perscription" method="get">
            @csrf
            <center>
                <legend style="font-size:x-large ; color: rgb(28, 12, 177);
            text-shadow: 1px 1px 2px white,0 0 25px rgb(120, 129, 250), 0 0 5px rgb(94, 94, 247);">
                    <b> Prescription</b>
                    <img src="/images/percription logo.png" alt="logo" style="width:5%;height:4%;margin-left: auto;">
                </legend>
                <hr color="white">
            </center>

            <p style="font-size:larger">
                 Dir Sir,
                 Your Prescription is printed >>> Go to the Printer to take it
                 thanks for you...
            </p>
    
            <p>If you want to Exit from page>> <a href="/home"> Home_Page</a></p>

    </div>
    <br> <br>
    </form>


    </div>
</body>

</html>