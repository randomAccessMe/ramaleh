<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <!-- MetisMenu CSS -->
    <!-- Timeline CSS -->
    <!-- Custom CSS -->
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ elixir('css/admin.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

        @include('admin.partials._top-nav')
        @include('admin.partials._side-nav')

        <div id="page-wrapper">
            @include('partials._message')
            @yield('content')

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- Bootstrap Core JavaScript -->
    <!-- Metis Menu Plugin JavaScript -->
    <!-- Custom Theme JavaScript -->
    <script src="js/all.js"></script>
    @stack('scripts')

    
</body>
</html>