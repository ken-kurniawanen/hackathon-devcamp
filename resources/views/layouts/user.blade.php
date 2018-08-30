<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="robots" content="noindex, nofollow, noarchive">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BukuPedia</title>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->

        <!-- Plugins -->
        <!-- iCheck for checkboxes and radio inputs -->
        <!-- <link href="{{asset('/adminlte/plugins/iCheck/all.css') }}" rel="stylesheet" type="text/css"> -->
        <!-- Select2 -->
        <!-- <link href="{{asset('/adminlte/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"> -->
        <!-- datetimepicker -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">

        <!-- EXTRAS -->

        <!-- END - Plugins -->

        <!-- Theme CSS -->
        <!-- <link rel="stylesheet" href="{{asset('/adminlte/css/AdminLTE.min.css') }}"> -->
        <!-- AdminLTE Skin. -->
        <!-- <link rel="stylesheet" href="{{asset('/adminlte/css/skins/' . config('adminlte.theme') . '.min.css') }}"> -->
        <!-- <link href="{{ asset('css/domiqado.css') }}" rel="stylesheet"> -->

        <!-- Custom CSS -->
        <!-- <link href="{{asset('/css/backend.css?version=' . config('adminlte.version')) }}" rel="stylesheet"> -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
    </head>

    <body class="hold-transition {{ config('adminlte.theme') }} sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
                    @yield('content')
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>