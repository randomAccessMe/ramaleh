<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resume</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php echo $__env->make('admin.resume.partials._tabs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::open([
                'route'   => ['admin::admin.site.create'],
                'class'   => 'buffer-top'
              ]); ?>


                <label for="">Name</label>
                <?php echo Form::text('name', null, ['class'=>'form-control']); ?>


                <label for="">Address</label>
                <?php echo Form::text('address', null, ['class'=>'form-control']); ?>


                <label for="">E Mail</label>
                <?php echo Form::email('email', null, ['class'=>'form-control']); ?>


                <label for="">Phone</label>
                <?php echo Form::text('phone', null, ['class'=>'form-control']); ?>


                <label for="">Summary</label>
                <?php echo Form::textarea('summary', null, ['class'=>'form-control']); ?>


                <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']); ?>


            <?php echo Form::close(); ?>

        </div>
    </div>
    <!-- /.row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>