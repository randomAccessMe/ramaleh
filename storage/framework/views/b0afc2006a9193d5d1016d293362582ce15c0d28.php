<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit <?php echo e($site->name); ?></h1>
            <?php echo Form::model($site, [
                'method'  => 'PATCH',
                'route'   => [
                    'admin::admin.site.update',
                    'site' => $site
                ],
                'enctype' => 'multipart/form-data'
            ]); ?>


            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php echo $__env->make('admin.portfolio.partials._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>