<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rami AlMaleh</title>

    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>


<div class="preloader" id="preloader">
    <div class="item">
        <img src="img/loading.gif">
    </div>
</div>


<div class="container">

    @include('app.start')

    @include('app.nav')
    @include('app.about')

    <div class="clear"></div>

    @include('app.portfolio')

    <div class="clear"></div>

    @include('app.extra')

    @include('app.contact')

    @include('app.footer')


</div>
<script src="{{ elixir('js/app.js') }}"></script> <!-- All script -->
<script>
    $(function () {

        var $container = $('.grid');

        $container.imagesLoaded(function () {
            $container.masonry({
                itemSelector: 'li'
            });
        });

    });
</script>


</body>

</html>
