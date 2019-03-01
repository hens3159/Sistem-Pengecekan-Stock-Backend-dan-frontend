<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style-admin.css">

         <!-- JS -->
         <script src="js/bootstrap/jquery.min.js"></script>
         <script src="js/bootstrap/bootstrap.min.js"></script>
         <script src="js/bootstrap/popper.min.js"></script>
         <script src="js/form-validator/jquery.form-validator.min.js"></script>


        <!--font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


@yield('css')


</head>

<body>
 @yield('content')
</body>
</html>
