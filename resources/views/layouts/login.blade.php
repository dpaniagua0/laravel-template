<!DOCTYPE html>
<!-- Mirrored from demo.flatlogic.com/3.2.1/transparent/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2016 02:33:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laravel Admin Blue Light</title>

    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
    <!-- Fonts
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
  -->
    <!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{ asset('css/application.min.css') }}" rel="stylesheet">

    @yield('custom-css')

</head>
<body class="background-dark">

    @yield('content')



        <!-- common libraries. required for every page-->
    <script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-pjax/jquery.pjax.js') }}"></script>
    <script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/widgster/widgster.js') }}"></script>
    <script src="{{ asset('lib/underscore/underscore.js') }}"></script>

    <!-- common application js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>



</body>
</html>
