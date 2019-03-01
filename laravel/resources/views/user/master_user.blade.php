<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, shrink-to-fit=no" >
    <title>@yield('title')</title>

<!-- css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">

<!--js -->
    <script src="js/bootstrap/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/form-validator/jquery.form-validator.min.js"></script>
    <script src="js/jquery.jscroll.min.js"></script>
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>

<!--font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

@yield('css')


</head>

<body>
 @yield('content')
</body>
</html>
