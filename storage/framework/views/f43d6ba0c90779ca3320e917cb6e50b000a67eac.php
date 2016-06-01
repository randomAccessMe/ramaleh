<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e(env('APP_NAME', 'Rami AlMaleh')); ?></title>

    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" href="<?php echo e(elixir('css/app.css')); ?>">
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

    <?php echo $__env->make('app.start', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('app.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('app.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="clear"></div>

    <?php echo $__env->make('app.portfolio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="clear"></div>

    <?php echo $__env->make('app.extra', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('app.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('app.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</div>
<script src="<?php echo e(elixir('js/app.js')); ?>"></script> <!-- All script -->
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
