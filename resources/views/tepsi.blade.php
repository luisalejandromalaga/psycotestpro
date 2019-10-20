<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fonts -->
        <!--Por alguna razón hace que no funcione el boton que califica-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
    <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

        <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

        <link rel="icon" type="image/png" href="{{asset('img/fav.png')}}">
  
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
</head>



<body class="" style="">
           





<main>
   @yield('content') 
</main>



    
</body>

</html>