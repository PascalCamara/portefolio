<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Camara Pascal - Etudiant EEMI -  @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @yield('content')
</body>


<script type="text/javascript" src="{{ asset('assets/js/jquery.1.11.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>

    @stack('scripts')

</html>
