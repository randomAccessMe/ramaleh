<?php if($errors->any()): ?>
    <div class="row buffer-top-lg">
        <div class="row">
            <div class="col-lg-8 col-md-12 buffer-md">
                <div class="alert alert-danger row">
                    <div class="col-md-2 hidden-xs">
                        <i class="fa fa-exclamation-triangle fa-5x"></i>
                    </div>
                    <div class="col-md-10">
                        <ul>
                            <?php foreach(array_unique($errors->all()) as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(session()->has('flash_notification')): ?>
    <div class="row">
        <div class="col-lg-6 col-md-8 buffer-top-lg">
            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
<?php endif; ?>